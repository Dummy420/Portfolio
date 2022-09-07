import { Injectable } from '@angular/core';

import * as monsters from './data/monsters.json';
import { Monster } from './models/monster.model';

import * as items from './data/items.json';
import { Item } from './models/item.model';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  monstersJson: any = (monsters as any).default;
  monsters: Monster[] = [];

  itemsJson: any = (items as any).default;
  items: Item[] = [];

  constructor() {
    console.table(this.getItems());
  }

  getMonsters(): Monster[] {
    this.monstersJson.monsters.forEach((monster: any) => {
      this.monsters.push(new Monster(monster.name, monster.health, monster.description));
    })

    return this.monsters;
  }

  getItems(): Item[] {
    this.itemsJson.items.forEach((item: any) => {
      this.items.push(new Item(item.name, item.value, item.description));
    })

    return this.items;
  }
}
