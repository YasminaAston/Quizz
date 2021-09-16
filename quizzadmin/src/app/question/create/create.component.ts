import { Component, OnInit } from '@angular/core';
import {QuestionsService } from '../services/questions.service';
import {FormGroup,FormBuilder,FormControl} from '@angular/forms'
import { Route } from '@angular/compiler/src/core';
import { ActivatedRoute, Router } from '@angular/router';
import { CategoriesService } from '../services/categories.service';
@Component({
  selector: 'app-create',
  templateUrl: './create.component.html',
  styleUrls: ['./create.component.css']
})
export class CreateComponent implements OnInit {
  questionForm: FormGroup
  categories: any;
  categoryData: any;

  constructor(private questionService: QuestionsService ,private fb: FormBuilder,private route:ActivatedRoute,private router:Router) { }

  ngOnInit(): void {
    this.questionForm = this.fb.group({
      label: [],
      categoryName: [],
      isCorrect: [],
      responseName: [],
      difficulty: []
    });

  }
  getAllCategories(){
    this.categories.services.getCategoriesData().subscribe({
      next:(data)=>{
        this.categoryData= data
       console.log(data);
       
      }
    })
  }

}