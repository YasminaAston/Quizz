package org.aston.quizzapp.data.network;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Game;


import io.reactivex.rxjava3.core.Observable;
import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface GameApi {

    @POST("quizz/api/games/new")
    Call<Game> startNewGame(@Body QuizzDto quizzDto);

    @PUT("quizz/api/games/update_score")
    Call<Game> updateGame(@Body GameDto gameDto);

    @GET("quizz/api/games/{id}")
    Call<Game> getGameById(@Path("id") int gameId);
}
