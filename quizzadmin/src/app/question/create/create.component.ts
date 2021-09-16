import { Component, OnInit } from '@angular/core';
import {QuestionsService } from '../services/questions.service';
import { ActivatedRoute, Router } from '@angular/router';
import { CategoryService } from '../services/category.service';
import {Category} from "../../models/category";


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

  constructor(private questionService: QuestionsService,
              private route:ActivatedRoute,private router:Router,
              private categoryService: CategoryService) { }

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
    }, err => {
      console.log(err);
    })

  }
}
