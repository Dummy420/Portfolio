import { Action } from "./action.model";

export class Page {
  number: number = 0;
  title: string = '';
  image: string = '';
  text: string = '';
  actions: Action[] = [];
}
