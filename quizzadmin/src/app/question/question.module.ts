import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {HttpClientModule} from '@angular/common/http'

import { UsersRoutingModule } from './question-routing.module';
import { ViewComponent } from './view/view.component';
import { CreateComponent } from './create/create.component';

import { EditComponent } from './edit/edit.component';
import {ReactiveFormsModule} from '@angular/forms'


@NgModule({
  declarations: [ViewComponent, CreateComponent, EditComponent],
  imports: [
    CommonModule,
    UsersRoutingModule,
    HttpClientModule,
    ReactiveFormsModule
  ]
})
export class UsersModule { }
