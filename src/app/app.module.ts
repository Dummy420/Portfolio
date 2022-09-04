import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { SvgBackgroundComponent } from './svg-background/svg-background.component';
import { LittleGuyComponent } from './little-guy/little-guy.component';
import { ProgramDirective } from './program.directive';

@NgModule({
  declarations: [
    AppComponent,
    SvgBackgroundComponent,
    LittleGuyComponent,
    ProgramDirective
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
