package org.aston.quizzapp.viewmodel;

import android.app.Application;
import android.content.Context;
import android.net.ConnectivityManager;
import android.net.Network;
import android.net.NetworkCapabilities;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelInject;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import org.aston.quizzapp.data.QuizzRepository;
import org.aston.quizzapp.dto.QuizzRespnse;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class QuizzViewModel extends AndroidViewModel {

    private QuizzRepository quizzRepository;
    private Context context;
    public MutableLiveData<Quizz> currentQuizz = new MutableLiveData<Quizz>();

    @ViewModelInject
    public QuizzViewModel(@NonNull Application application, QuizzRepository quizzRepository) {
        super(application);
        this.quizzRepository = quizzRepository;
        context = getApplication().getApplicationContext();
    }

    public void sendResponse(QuizzRespnse quizz){
        if (hasInternaetConnection()){
            try {
                Call<Quizz> quizzResponse = quizzRepository.updateQuizz(quizz, quizz.getQuizzId());
                quizzResponse.enqueue(new Callback<Quizz>() {
                    @Override
                    public void onResponse(Call<Quizz> call, Response<Quizz> response) {
                        if(response.isSuccessful()){
                            currentQuizz.setValue(response.body());
                            System.out.println("quizz response ////////////*************////////////");
                        }
                    }

                    @Override
                    public void onFailure(Call<Quizz> call, Throwable t) {
                        System.out.println(t.getMessage());
                        System.out.println(t.getStackTrace());
                    }
                });
            }catch (Exception e){
                System.out.println(e.getMessage());
                System.out.println(e.getStackTrace());
            }
        }else{
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
}
