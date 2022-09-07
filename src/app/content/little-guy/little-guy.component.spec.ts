import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LittleGuyComponent } from './little-guy.component';

describe('LittleGuyComponent', () => {
  let component: LittleGuyComponent;
  let fixture: ComponentFixture<LittleGuyComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LittleGuyComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(LittleGuyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
