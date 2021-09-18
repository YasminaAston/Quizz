import { Component, OnInit } from '@angular/core';
import {QuestionsService } from '../services/questions.service';
import { ActivatedRoute, Router } from '@angular/router';
import { CategoryService } from '../services/category.service';
import {Category} from "../../models/category";
import {Question} from "../../models/question";
import {Response} from "../../models/response";
import {ResponseDto} from "../../models/responseDto";
import {ResponseService} from "../../service/response.service";


class QuestionDto {
  public label: string;
  public categoryId: number;
  public difficulty: number;
}

@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {
  questionDto: QuestionDto = new QuestionDto();
  categories: Category [] = [];
  question: Question = null;
  created: boolean = false;
  responseCorrectNumber: number = 1;
  constructor(private questionService: QuestionsService,
              private route:ActivatedRoute,private router:Router,
              private categoryService: CategoryService, private responseService: ResponseService) { }

  ngOnInit(): void {
    console.log(this.questionDto);
    this.getCategories();
  }
  getCategories(){
    this.categoryService.getCategories().subscribe({
      next:(data: Category [])=>{
        console.log("ça c'est la console des categories ");
        console.log(data);
        this.categories= data
      }
    })
  }

  createQuestion() {
    console.log("value of form ");
    console.log(this.questionDto);
    let question: QuestionDto = new QuestionDto();
    question.label = this.questionDto.label;
    question.difficulty = Number(this.questionDto.difficulty);
    question.categoryId = Number(this.questionDto.categoryId);
    console.log("value of question ");
    console.log(question);
    this.questionService.createQuestion(question).subscribe(data => {
      console.log("question ajoutée avec succès");
      console.log(data);
      this.question = data;
      this.created = true;
    }, err => {
      console.log(err);
    })

  }

  responseStatus(value) {
  console.log(value);
  this.responseCorrectNumber = value;
  }

  onCreateResponses(value: any) {
    console.log(value);
    let responses: Array<any> = this.getValues(value);
    console.log(responses)
    console.log(this.responseCorrectNumber);
    for (let i = 0; i < responses.length; i++){
      let responseDto: ResponseDto = new ResponseDto();
      responseDto.label = responses[i];
      responseDto.questionId = this.question.id;
      if (i === (this.responseCorrectNumber -1)){
        responseDto.isCorrect = true;
      }
      this.responseService.addResponse(responseDto).subscribe(data => {
        console.log(data);
      }, error => {
        console.log(error);
      })
    }
    this.router.navigateByUrl('/questions')
  }

  getValues(map){
    return Array.from(Object.values(map));
  }
}
