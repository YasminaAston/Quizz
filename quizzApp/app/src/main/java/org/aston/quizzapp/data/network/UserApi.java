package org.aston.quizzapp.data.network;

import org.aston.quizzapp.models.User;

import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.Path;

public interface UserApi {

    @POST("quizz/api/users/new")
    Call<User> addUser(@Body User user);

    @GET("quizz/api/users/{id}")
    Call<User> getUserInfos(@Path("id") Integer userId);
}
