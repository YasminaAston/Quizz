import {BrowserModule, Title} from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import {HTTP_INTERCEPTORS, HttpClientModule} from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { IndexComponent} from './users/index/index.component';
import { CategoryComponent } from './category/category.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { NoopAnimationsModule } from '@angular/platform-browser/animations';
;
import { IndexComponentQuestion} from './question/index/index.component';
import { LoginAdminComponent } from './login-admin/login-admin.component';
import {JwtInterceptor} from "./healpers/JwtInterceptor";
import {ErrorInterceptor} from "./healpers/ErrorInterceptor";
import {DatePipe} from "@angular/common";

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    HeaderComponent,
    FooterComponent,
    IndexComponent,
    CategoryComponent,
    NotFoundComponent,
    IndexComponentQuestion,
    LoginAdminComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NoopAnimationsModule,
    AppRoutingModule, HttpClientModule, FormsModule
  ],
  providers: [Title, { provide: HTTP_INTERCEPTORS, useClass: JwtInterceptor, multi: true },
    { provide: HTTP_INTERCEPTORS, useClass: ErrorInterceptor, multi: true }, DatePipe
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
