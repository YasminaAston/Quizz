
package org.aston.quizzapp.viewmodel;

import android.app.Application;
import android.content.Context;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.net.Network;
import android.net.NetworkCapabilities;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelInject;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import org.aston.quizzapp.data.UserRepository;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.security.LoginRequest;
import org.aston.quizzapp.security.LoginResponse;
import org.aston.quizzapp.security.SessionManager;
import org.aston.quizzapp.ui.MainActivity;

import javax.inject.Inject;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


//@HiltViewModel
public class UserViewModel extends AndroidViewModel {


    public SessionManager sessionManager;
    private UserRepository userRepository;
    private Context context;
    public MutableLiveData<User> userMutableLiveData = new MutableLiveData<User>();



    @ViewModelInject
    public UserViewModel(@NonNull Application application, UserRepository userRepository) {
        super(application);
        this.userRepository = userRepository;
        context = getApplication().getApplicationContext();
    }


    public void getUserInfos(int userId) {
        System.out.println("hasInternaetConnection() " + hasInternaetConnection());
        if (hasInternaetConnection()) {
            try {
                System.out.println("Start get user");
                Call<User> userCall = userRepository.getUserInfos(userId);
                userCall.enqueue(new Callback<User>() {
                    @Override
                    public void onResponse(Call<User> call, Response<User> response) {
                        if (response.isSuccessful()) {
                            userMutableLiveData.setValue(response.body());
                            Toast.makeText(context, "game getting  ", Toast.LENGTH_SHORT).show();
                        }
                        System.out.println("get user from repo");
                        System.out.println(userMutableLiveData.getValue());
                    }
                    @Override
                    public void onFailure(Call<User> call, Throwable t) {
                        System.out.println("error :"+ t);
                        Toast.makeText(context, "Error " + t.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                });


            } catch (Exception e) {
                Toast.makeText(context, "Error " + e.getMessage(), Toast.LENGTH_SHORT).show();
            }
        } else {
            Toast.makeText(context, "No Internet Connection", Toast.LENGTH_SHORT).show();
        }
    }


    private boolean hasInternaetConnection() {
        ConnectivityManager connectivityManager  = (ConnectivityManager) getApplication(). getSystemService(Context.CONNECTIVITY_SERVICE);
        Network network = connectivityManager.getActiveNetwork();
        if (network == null) return false;
        NetworkCapabilities networkCapabilities = connectivityManager.getNetworkCapabilities(network);
        if (networkCapabilities == null) return false;
        return networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_WIFI)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_CELLULAR)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_ETHERNET)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_VPN);
    }


    public void onLogin(LoginRequest loginRequest) {
        userRepository.login(loginRequest)
                .enqueue(new Callback<LoginResponse>() {
                    @Override
                    public void onResponse(Call<LoginResponse> call, Response<LoginResponse> response) {
                        try {
                            if(response.isSuccessful()) {
                                LoginResponse loginResponse = response.body();
                                sessionManager = new SessionManager(context);
                                sessionManager.saveAuthToken(loginResponse.getToken());
                                userMutableLiveData.setValue(loginResponse.getUser());
                                System.out.println("//////////////authentication successfully //////////////////////////");
                                System.out.println(response.body());
                            } else {
                                System.out.println("Not successfully " + response.body());
                            }

                        } catch (Exception e) {
                            System.out.println("Error on authentication " + e.getMessage());
                        }

                    }

                    @Override
                    public void onFailure(Call<LoginResponse> call, Throwable t) {

                    }
                });
    }

}
