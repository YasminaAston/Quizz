import { Injectable } from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {Observable} from "rxjs";
import {Question} from "../models/question";
import {constants} from "../healpers/constants";
import {ResponseDto} from "../models/responseDto";

@Injectable({
  providedIn: 'root'
})
export class ResponseService {

  constructor(private http: HttpClient) { }


  addResponse(responseDto: ResponseDto) :Observable<Response>{
    return this.http.post<Response>(constants.apiUrl + '/responses/new', responseDto);
  }

}
