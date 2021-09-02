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

import org.aston.quizzapp.QuizzApplication;
import org.aston.quizzapp.data.GameRepository;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Category;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.util.NetworkResult;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class GameViewModel extends AndroidViewModel {

    private final GameRepository gameRepository;
    private Context context;
    public MutableLiveData<Game> game = new MutableLiveData<Game>();
    public MutableLiveData<List<Quizz>> listQuizzes = new MutableLiveData<List<Quizz>>();
    public MutableLiveData<User> user = new MutableLiveData<User>();


    @ViewModelInject
    public GameViewModel(@NonNull Application application, GameRepository gameRepository) {
        super(application);
        this.gameRepository = gameRepository;
        context = getApplication().getApplicationContext();
    }


   public void startGame(QuizzDto quizzDto){
       System.out.println("Start game ...");
        if (hasInternaetConnection()){
          try {
            Call<Game> gameResponse = gameRepository.startGame(quizzDto);
              gameResponse.enqueue(new Callback<Game>() {
                  @Override
                  public void onResponse(Call<Game> call, Response<Game> response) {
                      if(response.isSuccessful()){
                          game.setValue(response.body());
                          user.setValue(response.body().getUser());
                          listQuizzes.setValue(response.body().getQuizzes());
                          System.out.println("list des quizzes ////////////*************////////////");
                          System.out.println(listQuizzes.getValue());
                      }
                  }

                  @Override
                  public void onFailure(Call<Game> call, Throwable t) {
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
       System.out.println("Game started successfully ...");
   }


    public void getGame(int gameId){
        System.out.println("hasInternetConnection() "+ hasInternaetConnection());
        if (hasInternaetConnection()){
            try {
                System.out.println("Start get game");
                Call<Game> gameResponse = gameRepository.getGame(1);
                gameResponse.enqueue(new Callback<Game>() {
                    @Override
                    public void onResponse(Call<Game> call, Response<Game> response) {
                        if(response.isSuccessful()){
                            game.setValue(response.body());
                        }
                    }

                    @Override
                    public void onFailure(Call<Game> call, Throwable t) {
                        Toast.makeText(context, "Error "+t.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                });

                System.out.println("get game from repo");
                System.out.println(game.getValue());
            }catch (Exception e){
                Toast.makeText(context, "Error "+e.getMessage(), Toast.LENGTH_SHORT).show();
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
