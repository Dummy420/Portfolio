import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-app-button',
  templateUrl: './app-button.component.html'
})
export class AppButtonComponent implements OnInit {
  @Input() component: string = '';

  constructor() { }

  ngOnInit(): void {
  }

  public get window() : any {
    return window;
  }
}
