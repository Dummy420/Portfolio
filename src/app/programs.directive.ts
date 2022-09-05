import { Directive, ViewContainerRef } from '@angular/core';

@Directive({
  selector: '[programsHost]'
})
export class ProgramsDirective {
  constructor(public viewContainerRef: ViewContainerRef) { }
}