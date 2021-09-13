import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { CreateComponent } from './create/create.component';
import { EditComponent } from './edit/edit.component';
import { IndexComponentQuestion } from './index/index.component';
import { ViewComponent } from './view/view.component';

const routes: Routes = [
  
  { path: '', redirectTo: 'question/index', pathMatch: 'full'},
  { path: 'question/index', component: IndexComponentQuestion },
  { path: 'question/:userId/view', component: ViewComponent },
  { path: 'question/create', component: CreateComponent },
  { path: 'question/:Id/edit', component: EditComponent }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class QuestionsRoutingModule { }
