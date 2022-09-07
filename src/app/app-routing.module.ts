import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HeroComponent } from './content/hero/hero.component';
import { LittleGuyComponent } from './content/little-guy/little-guy.component';
import { SvgBackgroundComponent } from './content/svg-background/svg-background.component';

const routes: Routes = [
  {path: 'svg-background', component: SvgBackgroundComponent, title: "Svg Backgrounds"},
  {path: 'little-guy', component: LittleGuyComponent, title: "Little Guy"},
  {path: 'hero', component: HeroComponent, title: "Hero"},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
