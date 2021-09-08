import { Route } from '@angular/compiler/src/core';
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import {QuestionsService} from '../services/questions.service'
@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponentQuestion implements OnInit {
  questionData

  constructor(private questionService: QuestionsService, private route: Router, private router: ActivatedRoute) { }

  ngOnInit(): void {
    this. getAllquestion()
   
  }
  getAllquestion(){
    this.questionService.getQuestionData().subscribe({
      next:(data)=>{
        this.questionData = data
       console.log(data);
       
      }
    })
  }

  deleteQuestion(id){
    alert(`Are you sute to delete ${id}`)
    this.questionService.deleteQuestion(id).subscribe({
      next: (res)=>{
        alert(`${id} Deleted successfully`)
        console.log("deleted");
        this. getAllquestion()
        
      }
    })
  }

  // editUserDetails(id){
  //   this.route.navigate(['user',id,'edit']);
  // }

}

