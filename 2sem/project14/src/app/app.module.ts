import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { TextMaskModule } from 'angular2-text-mask';
import { ReactiveFormsModule } from '@angular/forms';


import { AppComponent } from './app.component';
import { TableWorkersComponent } from './ui/table-workers/table-workers.component';
import { AddformWorkerComponent } from './ui/addform-worker/addform-worker.component';
import { FormsModule } from '@angular/forms';
import { ChangeWorkersComponent } from './ui/change-workers/change-workers.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { EditComponent } from './ui/edit/edit.component';
import { HttpClientModule }   from '@angular/common/http';

@NgModule({
  declarations: [
    AppComponent,
    TableWorkersComponent,
    AddformWorkerComponent,
    ChangeWorkersComponent,
    EditComponent
    
  ],
  imports: [
    BrowserModule,FormsModule, NgbModule,
    TextMaskModule,
    ReactiveFormsModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
