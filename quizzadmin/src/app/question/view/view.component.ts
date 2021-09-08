import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import {QuestionsService} from '../services/questions.service'

@Component({
  selector: 'app-view',
  templateUrl: './view.component.html',
  styleUrls: ['./view.component.css']
})
export class ViewComponent implements OnInit {
     
  id: number;
  questionData: any;

  constructor(private questionService: QuestionsService, private route: ActivatedRoute,
    private router: Router) { }

  ngOnInit(): void {
 
    this.route.paramMap.subscribe({
     next: (res)=>{
       this.id = res['params'].questionId       
     }
    })
    this.questionService.getQuestionById(this.id).subscribe({
      next: (questionData)=>{
        this.questionData = questionData
       console.log(questionData);
       
      }
    })
  }

}

