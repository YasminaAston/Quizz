import {Response} from "./response";
import {Category} from "./category";

export class Question {
  public id: number;
  public label: string;
  public category: Category = new Category();
  public responses: Response [] = [];


}
