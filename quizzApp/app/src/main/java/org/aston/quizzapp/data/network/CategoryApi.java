package org.aston.quizzapp.data.network;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Category;
import org.aston.quizzapp.models.Game;

import java.util.List;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface CategoryApi {


    @GET("quizz/api/categories/{id}")
    Call<Category> getCategory(@Path("id") int categoryId);

    @GET("quizz/api/categories")
    Call<List<Category>> getCategories();
}
