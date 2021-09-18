import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {AuthenticationService} from "../../service/authentication.service";
import {constants} from "../../healpers/constants";
import {Question} from "../../models/question";
import {Observable} from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class QuestionsService {

  constructor(private http: HttpClient, private autService: AuthenticationService) { }

  getQuestionData() {
     if(this.autService.jwtToken == null){
       this.autService.jwtToken = this.autService.loadToken();
     }
    const url = 'http://127.0.0.1:8000/api/questions';
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


  createQuestion(questionData) :Observable<Question>{
       return this.http.post<Question>(constants.apiUrl + '/questions/new', questionData);
  }

  deleteQuestion(id) {
    const url = `http://127.0.0.1:8000/api/questions/${id}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json; charset=UTF-8'
      })
    };
    return this.http.delete(url, httpOptions);
  }

  getQuestionById(id){
    const url = `http://127.0.0.1:8000/api/questions/${id}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json; charset=UTF-8'
      })
    };
    return this.http.get(url, httpOptions);
  }
}

