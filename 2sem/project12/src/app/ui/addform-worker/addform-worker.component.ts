import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { MyWorkerType,MyWorker, MyWorkerDatabase } from 'src/app/shared/worker.model';

@Component({
  selector: 'app-addform-worker',
  templateUrl: './addform-worker.component.html',
  styleUrls: ['./addform-worker.component.css']
})
export class AddformWorkerComponent implements OnInit {
 name:string;
 surname:string;
 type= 0;
 myWorkerType = MyWorkerType;
 @Output()
addWorker = new EventEmitter<MyWorker>();

  constructor() { }

  ngOnInit(): void {}

  onAddWorker(){
    let worker: MyWorker ={
      name:this.name,
      surname:this.surname,
      type:this.type


    }
    
    if(worker.name.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.surname.length == 0){
      alert('Есть пустые поля');

    }
    else{
     
      this.addWorker.emit(worker);
    

    }
    
  }

}
