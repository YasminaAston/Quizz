package org.aston.quizzapp.data;


import org.aston.quizzapp.data.network.UserApi;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.security.LoginRequest;
import org.aston.quizzapp.security.LoginResponse;

import javax.inject.Inject;

import retrofit2.Call;
import retrofit2.Response;
import retrofit2.http.Body;

public class UserRemoteDataSource {

    public UserApi userApi;

    @Inject
    public UserRemoteDataSource(UserApi userApi) {
        this.userApi = userApi;
    }


    public Call<User> getUserInfos(Integer userId){
        return userApi.getUserInfos(userId);
    }

    public Call<User> addUser(User user){
        return userApi.addUser(user);
    }

    public Call<LoginResponse> login(LoginRequest request) {
        return userApi.login(request);
    }

}
