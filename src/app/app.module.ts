import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { DatePipe } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { SvgBackgroundComponent } from './content/svg-background/svg-background.component';
import { LittleGuyComponent } from './content/little-guy/little-guy.component';
import { ProgramsDirective } from './programs.directive';
import { WindowComponent } from './window/window.component';
import { HeroComponent } from './content/hero/hero.component';
import { AppButtonComponent } from './window/app-button/app-button.component';
import { ProgramsButtonsDirective } from './programs-buttons.directive';

declare global {
  interface Window { 
    cpl_openWindow: string;
  }
}

@NgModule({
  declarations: [
    AppComponent,
    SvgBackgroundComponent,
    LittleGuyComponent,
    ProgramsDirective,
    WindowComponent,
    HeroComponent,
    AppButtonComponent,
    ProgramsButtonsDirective
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [DatePipe],
  bootstrap: [AppComponent]
})
export class AppModule { }
