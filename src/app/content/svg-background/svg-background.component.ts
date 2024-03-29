import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-svg-background',
  templateUrl: './svg-background.component.html',
  styleUrls: ['./svg-background.component.scss']
})
export class SvgBackgroundComponent implements OnInit {
  classes: string[] = [
    'clouds',
    'wiggle',
    'diamonds',
    'topography',
    'charlie-brown',
    'death-star',
    'bamboo',
    'church-on-sunday',
    'bathroom-floor',
  ]
  currentClass: string = 'clouds';
  currentColor: string = 'red';
  backgroundColor: string = 'white';

  constructor() { }

  ngOnInit(): void {
    this.getRandom();
  }

  getRandom() : void {
    this.currentColor = this.getRandomColor();
    this.backgroundColor = this.getRandomColor();
    this.getRandomClass();
  }

  getRandomColor(): string {
    var color = Math.floor(0x1000000 * Math.random()).toString(16);
    return `#${('000000' + color).slice(-6)}`;
  }
  getRandomClass(): void {
    this.currentClass = this.classes[Math.floor(Math.random() * this.classes.length)];
  }
}
