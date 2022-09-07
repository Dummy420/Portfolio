import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { SvgBackgroundComponent } from './content/svg-background/svg-background.component';
import { LittleGuyComponent } from './content/little-guy/little-guy.component';
import { ProgramDirective } from './program.directive';
import { ProgramsDirective } from './programs.directive';
import { WindowComponent } from './window/window.component';
import { FormsModule } from '@angular/forms';
import { HeroComponent } from './content/hero/hero.component';

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
    ProgramDirective,
    ProgramsDirective,
    WindowComponent,
    HeroComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
