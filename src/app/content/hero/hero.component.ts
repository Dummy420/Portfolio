import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-hero',
  templateUrl: './hero.component.html',
  styleUrls: ['./hero.component.scss']
})
export class HeroComponent implements OnInit {
  maxHP: number = 20;
  HP: number = this.maxHP;

  gold: number = 0;

  items: any[] = [
    {
      name: 'test1'
    },
    {
      name: 'test2'
    }
  ];

  constructor() { }

  ngOnInit(): void {
  }

}
