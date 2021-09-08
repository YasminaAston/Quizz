import { Component, OnInit } from '@angular/core';
import {QuestionsService } from '../services/questions.service';
import {FormGroup,FormBuilder,FormControl} from '@angular/forms'
import { Route } from '@angular/compiler/src/core';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {
  questionForm: FormGroup

  constructor(private questionService: QuestionsService ,private fb: FormBuilder,private route:ActivatedRoute,private router:Router) { }

  ngOnInit(): void {
    this.questionForm = this.fb.group({
      name: [],
      username: [],
      email: []
    });

  }
  createQuestion(){
    this.questionService.createQuestion(this.questionForm.value).subscribe({
      next: (res)=>{
        alert("user created successfully!")
       console.log(res);
       this.router.navigateByUrl('question/index');
      
       
      }
    });

  }

}