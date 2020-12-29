import { Component, OnInit,Input,Output,EventEmitter } from '@angular/core';
import { MyWorkerType, MyWorker } from 'src/app/shared/worker.model'; 
import { FormGroup, FormControl, Validators} from '@angular/forms';

@Component({
  selector: 'app-change-workers',
  templateUrl: './change-workers.component.html',
  styleUrls: ['./change-workers.component.css']
})
export class ChangeWorkersComponent implements OnInit {

  public mask = ['+', '7', ' ', '(', /[1-9]/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/]
  changeform: FormGroup = new FormGroup({

    "name": new FormControl("",[Validators.required,Validators.pattern(/[А-я]/)]),
    "surname": new FormControl("", [
                Validators.required, 
                Validators.pattern(/[А-я]/)

    ]),
    "type": new FormControl("", Validators.required),
    "phone": new FormControl("", Validators.required)

});

  myWorkerType = MyWorkerType;
  @Input() name: string;
  @Input() surname: string;
  @Input() type: number;
  @Input() id: number;
  @Input() phone: string;
  @Output() editWorker = new EventEmitter<object>();


  constructor() { }

  ngOnInit(): void {
  }
  onEditWorker() {

    
    
    let worker: MyWorker ={
      id: this.id,
      name: this.changeform.controls["name"].value ,
      surname: this.changeform.controls["surname"].value,
      type: this.changeform.controls["type"].value,
      phone: this.changeform.controls["phone"].value


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
