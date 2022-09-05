import { Component, Input, OnInit, ViewChild } from '@angular/core';
import { LittleGuyComponent } from '../little-guy/little-guy.component';
import { ProgramsDirective } from '../programs.directive';
import { SvgBackgroundComponent } from '../svg-background/svg-background.component';

@Component({
  selector: 'app-window',
  templateUrl: './window.component.html'
})
export class WindowComponent implements OnInit {
  @Input() component: string = '';

  @ViewChild(ProgramsDirective, {static: true}) programsHost!: ProgramsDirective;

  ngOnInit(): void {
    const viewContainerRef = this.programsHost.viewContainerRef;
    switch(this.component) {
      case "svg-background":
        viewContainerRef.createComponent<SvgBackgroundComponent>(SvgBackgroundComponent);
        break;
      case "little-guy":
        viewContainerRef.createComponent<LittleGuyComponent>(LittleGuyComponent);
        break;
    }
  }

  public get window() : any {
    return window;
  }

}
