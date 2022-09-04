import { Directive, ViewContainerRef } from '@angular/core';

@Directive({
  selector: '[appProgram]'
})
export class ProgramDirective {

  constructor(public viewContainerRef: ViewContainerRef) { }

}
