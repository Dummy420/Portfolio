import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-svg-background',
  templateUrl: './svg-background.component.html',
  styleUrls: ['./svg-background.component.scss']
})
export class SvgBackgroundComponent implements OnInit {
  styleColor: string = '0';
  classes: string[] = [
    'clouds',
    'wiggle',
    'diamonds',
  ]
  currentClass: string = 'clouds';
  constructor() { }

  ngOnInit(): void {
    // this.getRandomColor();
    // this.getRandomClass();
  }

  getRandomColor(): void {
    var color = Math.floor(0x1000000 * Math.random()).toString(16);
    this.styleColor = `#${('000000' + color).slice(-6)}`;
  }
  getRandomClass(): void {
    this.currentClass = this.classes[(+this.styleColor % this.classes.length)];
  }
}
