import { Directive, ViewContainerRef } from '@angular/core';

@Directive({
  selector: '[programsButtonsHost]'
})
export class ProgramsButtonsDirective {

  constructor(public viewContainerRef: ViewContainerRef) { }

}
