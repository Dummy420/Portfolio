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
  ]
  currentClass: string = 'clouds';
  currentColor: string = 'red';

  constructor() { }

  ngOnInit(): void {
    this.getRandom();
  }

  getRandom() : void {
    this.getRandomColor();
    this.getRandomClass();
  }

  getRandomColor(): void {
    var color = Math.floor(0x1000000 * Math.random()).toString(16);
    this.currentColor = `#${('000000' + color).slice(-6)}`;
    console.log(this.currentColor);
  }
  getRandomClass(): void {
    this.currentClass = this.classes[Math.floor(Math.random() * this.classes.length)];
    console.log(this.currentClass);
  }
}