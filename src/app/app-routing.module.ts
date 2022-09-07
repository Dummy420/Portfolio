import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LittleGuyComponent } from './content/little-guy/little-guy.component';
import { SvgBackgroundComponent } from './content/svg-background/svg-background.component';

const routes: Routes = [
  {path: 'svg-background', component: SvgBackgroundComponent, title: "Svg Backgrounds"},
  {path: 'little-guy', component: LittleGuyComponent, title: "Little Guy"},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
