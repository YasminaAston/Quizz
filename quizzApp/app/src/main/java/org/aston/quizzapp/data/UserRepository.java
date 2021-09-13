package org.aston.quizzapp.data;

import org.aston.quizzapp.models.User;
import org.aston.quizzapp.security.LoginRequest;
import org.aston.quizzapp.security.LoginResponse;

import javax.inject.Inject;

import retrofit2.Call;

//@ActivityRetainedScoped
public class UserRepository {


    private UserRemoteDataSource userRemoteDataSource;

    @Inject
    public UserRepository(UserRemoteDataSource userRemoteDataSource) {
        this.userRemoteDataSource = userRemoteDataSource;
    }


    public Call<User> getUserInfos(Integer userId){
        return userRemoteDataSource.getUserInfos(userId);
    }

    public Call<LoginResponse> login(LoginRequest request) {
        return userRemoteDataSource.login(request);
    }

    //public Call<User> registration(RegistrationRequest registrationRequest) {
      //  return userRemoteDataSource.addUser(registrationRequest);
    //}

    public Call<User> registration(User user) {
        return userRemoteDataSource.addUser(user);
    }

}
