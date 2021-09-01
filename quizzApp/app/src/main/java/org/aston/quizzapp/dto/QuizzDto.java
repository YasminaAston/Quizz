package org.aston.quizzapp.dto;

public class QuizzDto {

    private Integer userId;
    private Integer categoryId;
    private int difficulty;


    public QuizzDto(Integer userId, Integer categoryId, int difficulty) {
        this.userId = userId;
        this.categoryId = categoryId;
        this.difficulty = difficulty;
    }

    public QuizzDto() {

    }

    public Integer getUserId() {
        return userId;
    }

    public Integer getCategoryId() {
        return categoryId;
    }

    public int getDifficulty() {
        return difficulty;
    }

    public void setUserId(Integer userId) {
        this.userId = userId;
    }

    public void setCategoryId(Integer categoryId) {
        this.categoryId = categoryId;
    }

    public void setDifficulty(int difficulty) {
        this.difficulty = difficulty;
    }
}
