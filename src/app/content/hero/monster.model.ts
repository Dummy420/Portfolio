import { Item } from "./item.model";

export class Monster {
  name: string = '';
  description: string = '';
  health: number = 0;
  loot: Item[] = [];
}
