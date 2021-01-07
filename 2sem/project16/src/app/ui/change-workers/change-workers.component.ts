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
    "middlename": new FormControl("", [
      Validators.required, 
      Validators.pattern(/[А-я]/)

]),
    "type": new FormControl("", Validators.required),
    "phone": new FormControl("", Validators.required),
    "birthday": new FormControl("", Validators.required),
    "email": new FormControl("", Validators.required)

});

  myWorkerType = MyWorkerType;
  @Input() name: string;
  @Input() surname: string;
  @Input() middlename: string;
  @Input() type: number;
  @Input() id: number;
  @Input() phone: string;
  @Input() email: string;
  @Input() birthday: string;
  @Output() editWorker = new EventEmitter<object>();
  @Output() firstDeleteWorker = new EventEmitter<number>();


  constructor() { }

  ngOnInit(): void {
  }
  onEditWorker() {

    
    
    let worker: MyWorker ={
      id: this.id,
      name: this.changeform.controls["name"].value ,
      surname: this.changeform.controls["surname"].value,
      middlename: this.changeform.controls["middlename"].value,
      type: this.changeform.controls["type"].value,
      phone: this.changeform.controls["phone"].value,
      email: this.changeform.controls["email"].value,
      birthday: this.changeform.controls["birthday"].value,


    }
    
    if(worker.name.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.surname.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.email.length == 0){
      alert('Есть пустые поля');
    }
    else if(worker.middlename.length == 0){
      alert('Есть пустые поля');
    }
    else if(worker.birthday.length == 0){
      alert('Есть пустые поля');
    }
    else{
     
      this.editWorker.emit(worker);
    

    }


  }
  onDeleteWorker(id: number) {
    this.firstDeleteWorker.emit(this.id);
  }
 
 

}
