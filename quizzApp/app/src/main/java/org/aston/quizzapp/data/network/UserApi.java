package org.aston.quizzapp.data.network;

import org.aston.quizzapp.models.User;
import org.aston.quizzapp.security.LoginRequest;
import org.aston.quizzapp.security.LoginResponse;

import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.Body;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.Path;

public interface UserApi {

    @POST("users/new")
    Call<User> addUser(@Body User user);

    @GET("users/{id}")
    Call<User> getUserInfos(@Path("id") Integer userId);

    //@FormUrlEncoded
    @POST("login")
    Call<LoginResponse> login(@Body LoginRequest request);

}
