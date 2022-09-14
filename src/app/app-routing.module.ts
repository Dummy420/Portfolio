import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HeroComponent } from './content/hero/hero.component';
import { LittleGuyComponent } from './content/little-guy/little-guy.component';
import { SvgBackgroundComponent } from './content/svg-background/svg-background.component';
import { NotFoundComponent } from './not-found/not-found.component';

const routes: Routes = [
  {path: 'svg-background', component: SvgBackgroundComponent, title: "Svg Backgrounds"},
  {path: 'little-guy', component: LittleGuyComponent, title: "Little Guy"},
  {path: 'hero', component: HeroComponent, title: "Hero"},
  {path: '**', component: NotFoundComponent, title: "404"},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
