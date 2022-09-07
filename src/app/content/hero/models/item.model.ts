export class Item {
  name: string = '';
  value: number = 0;
  description: string = '';
  image: string = '';

  constructor(_name: string, _value: number = 0, _description?:string, _image?: string) {
    this.name = _name;
    this.value = _value;
    this.description = _description || '';
    this.image = _image || '';
  }
}
