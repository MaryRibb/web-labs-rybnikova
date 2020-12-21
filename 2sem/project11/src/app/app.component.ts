import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'project11';
 

  Detchik = [];

 
  random(){
  let y = Math.random();
  let n = true;
  if (y < 0.5)
    n = false;
  else
   n= true;
   return n;
  }

  constructor() {
    for (let i = 0; i < 10; i++) {
      this. Detchik.push({id: i, name: 'Name'+i, status: this.random()});
    }
  }
  create(NameInput){
    let namber = 0;
    let len =  this.Detchik.length -1;
    if(this.Detchik[len])
     namber = this.Detchik[len].id+1;
     {this.Detchik.push({id: namber, name: NameInput.value, status: this.random()});}

   
  }
  
  deleteDet(id: number) {
    const elem = this.Detchik.find(det => det.id === id);
    const elId: number = this.Detchik.indexOf(elem);

    this.Detchik.splice(elId, 1);
  }
}