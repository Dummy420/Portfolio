import { Item } from "./item.model";
import { Monster } from "./monster.model";

export class Action {
  text: string = '';
  target: string = '';
  monsters: Monster[] = [];
  items: Item[] = [];
}
