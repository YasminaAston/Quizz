import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http'
import {AuthenticationService} from "../../service/authentication.service";
import {constants} from "../../healpers/constants";
import {Category} from "../../models/category";
import {Observable} from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class CategoryService {

    constructor(private http: HttpClient, private autService: AuthenticationService) { }
   // , {headers: new HttpHeaders({ 'Authorization' : 'Bearer ' + this.autService.jwtToken})}

    getCategories() :Observable<Category[]>{
      return this.http.get<Category[]>(constants.apiUrl + '/categories/');
    }

    editQuestion(questionData) {
           return this.http.put(constants.apiUrl, questionData);
    }
    getCategoriesById(id){
        return this.http.get( constants.apiUrl + '/categories/' + id);
      }
    }
