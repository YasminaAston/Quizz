import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http'
import {AuthenticationService} from "../../service/authentication.service";

@Injectable({
  providedIn: 'root'
})
export class CategoriesService {

    constructor(private http: HttpClient, private autService: AuthenticationService) { }
  
    getCategoriesData() {
       if(this.autService.jwtToken == null){
         this.autService.jwtToken = this.autService.loadToken();
       }
      const url = 'http://127.0.0.1:8000/api/categories';
      return this.http.get(url, {headers: new HttpHeaders({ 'Authorization' : 'Bearer ' + this.autService.jwtToken})} );
    }
    editQuestion(questionData) {
      const url = `http://127.0.0.1:8000/api/questions/${questionData.id}`;
      const httpOptions = {
        headers: new HttpHeaders({
          'Content-Type': 'application/json; charset=UTF-8'
        })
      };
  
      return this.http.put(url, questionData, httpOptions);
    }
    getCategoriesById(id){
        const url = `http://127.0.0.1:8000/api/categories/${id}`;
        const httpOptions = {
          headers: new HttpHeaders({
            'Content-Type': 'application/json; charset=UTF-8'
          })
        };
        return this.http.get(url, httpOptions);
      }
    }