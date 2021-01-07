import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { MyWorkerType,MyWorker } from 'src/app/shared/worker.model';
import { FormGroup, FormControl, Validators} from '@angular/forms';
import { TextMaskModule } from 'angular2-text-mask';

@Component({
  selector: 'app-addform-worker',
  templateUrl: './addform-worker.component.html',
  styleUrls: ['./addform-worker.component.css']
})
export class AddformWorkerComponent implements OnInit {
  myWorkerType = MyWorkerType;
  public mask = ['+', '7', ' ', '(', /[1-9]/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/]
  myFirstReactiveForm: FormGroup = new FormGroup({

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
 @Output()
addWorker = new EventEmitter<MyWorker>();

  constructor() { }

  ngOnInit(): void {}

  onAddWorker(){
    let worker: MyWorker ={
      name: this. myFirstReactiveForm.controls["name"].value,
      surname: this. myFirstReactiveForm.controls["surname"].value,
      middlename: this. myFirstReactiveForm.controls["middlename"].value,
      type: this. myFirstReactiveForm.controls["type"].value,
      phone: this. myFirstReactiveForm.controls["phone"].value,
      email: this. myFirstReactiveForm.controls["email"].value,
      birthday: this. myFirstReactiveForm.controls["birthday"].value


    }
    
    if(worker.name.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.surname.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker. middlename.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.phone.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.email.length == 0){
      alert('Есть пустые поля');

    }
    else if(worker.birthday.length == 0){
      alert('Есть пустые поля');

    }
    else{
     
      this.addWorker.emit(this.myFirstReactiveForm.value);
    

    }
    
  }

}
