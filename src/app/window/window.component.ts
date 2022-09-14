import { Component, Input, OnInit, HostListener, ViewChild } from '@angular/core';
import { LittleGuyComponent } from '../content/little-guy/little-guy.component';
import { ProgramsDirective } from '../programs.directive';
import { SvgBackgroundComponent } from '../content/svg-background/svg-background.component';
import { HeroComponent } from '../content/hero/hero.component';
import { NotFoundComponent } from '../not-found/not-found.component';

@Component({
  selector: 'app-window',
  templateUrl: './window.component.html'
})
export class WindowComponent implements OnInit {
  @HostListener('click', ['$event'])
  onClick(e: any) {
    this.window.cpl_openWindow = this.component;
  }

  @Input() component: string = '';
  @Input() maximised: boolean = false;

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
      case "hero":
        viewContainerRef.createComponent<HeroComponent>(HeroComponent);
        break;
      case "portfolio":
        // viewContainerRef.createComponent<PortfolioComponent>(PortfolioComponent);
        break;
      default:
        viewContainerRef.createComponent<NotFoundComponent>(NotFoundComponent);
        break;
    }

    this.window.cpl_openWindow = this.component;
  }

  public get window() : any {
    return window;
  }
}
