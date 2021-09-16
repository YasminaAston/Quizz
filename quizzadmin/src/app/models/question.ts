import {Response} from "./response";

export class Question {
  public id: number;
  public label: string;
  public category: Category;
  public responses: Response [];


}
