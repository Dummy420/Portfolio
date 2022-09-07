export class Monster {
  name: string = '';
  description: string = '';
  image: string = '';
  health: number = 0;

  constructor(_name: string, _health: number, _description?: string, _image?: string) {
    this.name = _name;
    this.health = _health;
    this.description = _description || '';
    this.image = _image || '';
  }
}
