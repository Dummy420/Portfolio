import { AfterViewInit, Component, ComponentFactoryResolver, ComponentRef, OnInit, Type, ViewChild, ViewContainerRef } from '@angular/core';
import { ActivatedRoute, NavigationEnd, NavigationStart, Resolve, ResolveFn, Router } from '@angular/router';
import interact from 'interactjs';
import { filter } from 'rxjs';
import { ProgramDirective } from './program.directive';
import { ProgramsDirective } from './programs.directive';
import { WindowComponent } from './window/window.component';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent implements AfterViewInit, OnInit {
  title: string = 'Fun stuff';
  loading: boolean = true;

  menuOpen: boolean = false;
  activeWindow: string = '';

  programs: any[] = [];

  currentUrl: string = '';

  @ViewChild(ProgramsDirective, {static: true}) programsHost!: ProgramDirective;

  constructor(private router: Router, private route: ActivatedRoute) {
    interact('.resizable').resizable({
      edges: {
        left: true,
        right: true,
        bottom: true,
        top: true
      },
      margin: 6,
      listeners: {
        move(event) {
          let target = event.target
          let x = (parseFloat(target.getAttribute('data-x')) || 0)
          let y = (parseFloat(target.getAttribute('data-y')) || 0)
    
          // update the element's style
          target.style.width = `${event.rect.width}px`
          target.style.height = `${event.rect.height}px`
    
          // translate when resizing from top or left edges
          x += event.deltaRect.left
          y += event.deltaRect.top
    
          target.style.transform = `translate(${x}px, ${y}px)`
    
          target.setAttribute('data-x', x)
          target.setAttribute('data-y', y)

          window.cpl_openWindow = target.id;
        }
      },
      modifiers: [
        // keep the edges inside the parent
        interact.modifiers.restrictEdges({
          outer: 'parent'
        }),
    
        // minimum size
        interact.modifiers.restrictSize({
          min: {
            width: 200,
            height: 100
          }
        })
      ],
      inertia: false
    });
    interact('.draggable').draggable({
      allowFrom: '.window-title',
      ignoreFrom: '.buttons, .maximised',
      listeners: {
        move(event) {
          let target = event.target
          // keep the dragged position in the data-x/data-y attributes
          let x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
          let y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy
    
          // translate the element
          target.style.transform = `translate(${x}px, ${y}px)`
    
          // update the posiion attributes
          target.setAttribute('data-x', x)
          target.setAttribute('data-y', y)

          window.cpl_openWindow = target.id;
        }
      },
      inertia: false,
      modifiers: [
        interact.modifiers.restrictRect({
          restriction: 'parent',
          endOnly: true
        })
      ]
    });
  }

  createComponent(prog: string, maximised: boolean = false): void {
    if(!document.querySelector(`#${prog}`)) {
      const viewContainerRef = this.programsHost.viewContainerRef;

      const component: ComponentRef<WindowComponent> = viewContainerRef.createComponent<WindowComponent>(WindowComponent);
  
      component.instance.component = prog;
      component.instance.maximised = maximised;
    }
  }

  ngOnInit(): void {
    this.router.events
      .pipe(
        filter(event => event instanceof NavigationEnd)
      )
      .subscribe(val => {
        let url = val as NavigationEnd;
        let currentRoute = this.router.config.find(el => {
            return el.path ? url.url.includes(el.path) : false;
          });

        this.currentUrl = currentRoute?.path ? currentRoute.path : this.currentUrl;
        this.title = currentRoute?.title ? currentRoute.title as string : this.title;

        // Si il faut afficher une fenetre
        if (currentRoute) {
          let max = false;
          
          this.route.queryParams.subscribe(params => {
            if(params.hasOwnProperty('maximised')) {
              max = true;
            }
          });
          this.createComponent(this.currentUrl, max);
        }

        this.loading = false;
      })
  }

  ngAfterViewInit(): void {
    // this.loading = false;
  }

  toggleMenu(): void {
    console.log("test");
    this.menuOpen = !this.menuOpen;
    console.log(this.menuOpen);
  }
}
