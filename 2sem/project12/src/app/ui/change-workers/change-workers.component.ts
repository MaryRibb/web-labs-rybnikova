import { Component, OnInit,Input,Output,EventEmitter } from '@angular/core';
import { MyWorkerType, MyWorker } from 'src/app/shared/worker.model'; 


@Component({
  selector: 'app-change-workers',
  templateUrl: './change-workers.component.html',
  styleUrls: ['./change-workers.component.css']
})
export class ChangeWorkersComponent implements OnInit {

  myWorkerType = MyWorkerType;
  @Input() name: string;
  @Input() surname: string;
  @Input() type: number;
  @Input() id: number;
  @Output() editWorker = new EventEmitter<object>();


  constructor() { }

  ngOnInit(): void {
  }
  onEditWorker() {

    
    
    let worker: MyWorker ={
      id: this.id,
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
     
      this.editWorker.emit(worker);
    

    }


  }
 
 

}
