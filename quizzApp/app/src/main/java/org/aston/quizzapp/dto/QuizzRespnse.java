package org.aston.quizzapp.dto;

public class QuizzRespnse {

    private Integer gameId;
    private Integer quizzId;
    private boolean isCorrect;



    public Integer getGameId() {
        return gameId;
    }

    public void setGameId(Integer gameId) {
        this.gameId = gameId;
    }

    public Integer getQuizzId() {
        return quizzId;
    }

    public void setQuizzId(Integer quizzId) {
        this.quizzId = quizzId;
    }

    public boolean isCorrect() {
        return isCorrect;
    }

    public void setCorrect(boolean correct) {
        isCorrect = correct;
    }

}
