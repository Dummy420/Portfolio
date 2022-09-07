import { Component, ElementRef, Host, HostListener, OnInit } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Component({
  selector: 'app-little-guy',
  templateUrl: './little-guy.component.html',
  styleUrls: ['./little-guy.component.scss']
})
export class LittleGuyComponent implements OnInit {
  @HostListener('mousemove', ['$event'])
  onMouseMove(e: any) {
    this.elementrotateX = (((e.layerX / this.component.nativeElement.offsetWidth) * 120) - 60).toFixed(1);
    this.elementrotateY = (((e.layerY / this.component.nativeElement.offsetHeight) * 120) - 60).toFixed(1);
    this.elementstyle = `transform: rotatex(${-this.elementrotateY}deg) rotatey(${this.elementrotateX}deg);`;
  }
  @HostListener('mouseout', ['$event'])
  onMouseOut() {
    this.face_img = 'assets/images/face-sad.webp'

    setTimeout(() => {
      this.elementrotateX = 0;
      this.elementrotateY = 0;
      this.elementstyle = `transition: 2s all ease-out; transform: rotatex(-10deg) rotatey(0deg);`
    }, 1000);
  }
  @HostListener('mouseenter', ['$event'])
  onMouseEnter() {
    this.face_img = 'assets/images/face1.webp'
    this.elementstyle = '';
  }

  elementrotateX: any = 0;
  elementrotateY: any = 0;

  elementstyle: string = `transform: rotatex(${-this.elementrotateY}deg) rotatey(${this.elementrotateX}deg);`;

  face_img: string = "assets/images/face1.webp";

  constructor(private component: ElementRef) {
  }

  ngOnInit(): void {
  }
}
