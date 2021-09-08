import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {HomeComponent} from "./home/home.component";
import {NotFoundComponent} from "./not-found/not-found.component";
import {IndexComponentQuestion} from "./question/index/index.component";
import { IndexComponent } from './users/index/index.component';

const routes: Routes = [
  { path: 'home', component: HomeComponent},
  { path: 'questions', component: IndexComponentQuestion},
  { path: 'users', component: IndexComponent},
  { path: '', redirectTo: 'home', pathMatch: 'full'},
  { path: '**', component: NotFoundComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
