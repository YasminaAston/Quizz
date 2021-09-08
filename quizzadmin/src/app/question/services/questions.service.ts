import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http'

@Injectable({
  providedIn: 'root'
})
export class QuestionsService {

  constructor(private http: HttpClient) { }

  getQuestionData() {
    const url = 'https://127.0.0.1:8000/api/questions/';
    return this.http.get(url);
  }
  editQuestion(questionData) {
    const url = `https://127.0.0.1:8000/api/questions/${questionData.id}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json; charset=UTF-8'
      })
    };

    return this.http.put(url, questionData, httpOptions);
  }


  createQuestion(questionData) {
    const url = 'https://127.0.0.1:8000/api/questions/';
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json; charset=UTF-8'
      })
    };

    return this.http.post(url, questionData, httpOptions);
  }

  deleteQuestion(id) {
    const url = `https://127.0.0.1:8000/api/questions/${id}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json; charset=UTF-8'
      })
    };
    return this.http.delete(url, httpOptions);
  }

  getQuestionById(id){
    const url = `https://127.0.0.1:8000/api/questions/${id}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json; charset=UTF-8'
      })
    };
    return this.http.get(url, httpOptions);
  }
}
