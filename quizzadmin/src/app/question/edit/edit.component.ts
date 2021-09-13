import { HttpErrorResponse } from '@angular/common/http';
import { Component, OnDestroy, OnInit } from '@angular/core';
import {FormControl,FormBuilder,FormGroup} from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { Subscription } from 'rxjs';
import {QuestionsService} from '../services/questions.service'

@Component({
  selector: 'app-edit',
  templateUrl: './edit.component.html',
  styleUrls: ['./edit.component.css']
})
export class EditComponent implements OnInit ,OnDestroy{

  useEditForm: FormGroup
  id: any
  questionData: any;
  idsubscription: Subscription;
  editSubscription: Subscription

  constructor(private fb: FormBuilder, private questionService: QuestionsService, private route: ActivatedRoute,
   private router:Router) { }

  ngOnInit(): void {
    debugger;
   this.idsubscription= this.route.paramMap.subscribe({
      next: (res)=>{
        this.id = res['params'].Id      
      }
  })
 
  this.getQuestionById();
  
}
  createForm(){
    debugger
    this.useEditForm=this.fb.group({
      'id':[this.questionData.id],
      'label':[this.questionData.label],
      'categoryname':[this.questionData.category.name ],
      'iscorrect':[this.questionData.responses.isCorrect ],
      'responsename':[this.questionData.responses.label],
      'difficulty':[this.questionData.difficulty ]
    })
  }

  getQuestionById(){
    this.questionService.getQuestionById(this.id).subscribe({
      next: (questionData)=>{
        this.questionData = questionData
       console.log("edit question",questionData);
       this. createForm()
       
      }
    })
  }

  updateQuestionData(){
   this.editSubscription = this.questionService.editQuestion(this.useEditForm.value).subscribe({
     next: (res)=>{
       alert("UpDated sucessfully");
       this.router.navigateByUrl('question/index'); 
     },
     error: (error: HttpErrorResponse)=>{
       console.log(error);
       
     }
   })
  }

  
ngOnDestroy(){
  this.idsubscription.unsubscribe()
}
  
}

