package org.aston.quizzapp.ui;

import android.content.Context;
import android.content.Intent;
import android.os.Build;
import android.os.Bundle;

import com.google.android.material.snackbar.Snackbar;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;

import android.util.AttributeSet;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.cardview.widget.CardView;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.LifecycleOwner;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.lifecycle.ViewModelProviders;
import androidx.navigation.NavController;
import androidx.navigation.Navigation;
import androidx.navigation.ui.AppBarConfiguration;
import androidx.navigation.ui.NavigationUI;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.ActivityGameBinding;
import org.aston.quizzapp.databinding.FragmentGameBinding;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.dto.QuizzRespnse;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;
import org.aston.quizzapp.models.Response;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.viewmodel.CategoryViewModel;
import org.aston.quizzapp.viewmodel.GameViewModel;
import org.aston.quizzapp.viewmodel.QuizzViewModel;
import org.aston.quizzapp.viewmodel.UserViewModel;

import java.util.ArrayList;
import java.util.List;

import dagger.hilt.android.AndroidEntryPoint;

@AndroidEntryPoint
public class GameActivity extends AppCompatActivity {


    private AppBarConfiguration appBarConfiguration;
    private CardView cardView;
    ActivityGameBinding gameBinding;
    public GameViewModel gameViewModel;
    private CategoryViewModel categoryViewModel;
    private QuizzViewModel quizzViewModel;
    private Quizz currentQuizz = null;
    private int index = 0;
    private User user;
    private Game game = null;
    private UserViewModel userViewModel;
    private List<Quizz> quizzList = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
         gameBinding = DataBindingUtil.setContentView(this, R.layout.activity_game);


        gameViewModel = (GameViewModel) new ViewModelProvider(this).get(GameViewModel.class);
        categoryViewModel = (CategoryViewModel) new ViewModelProvider(this).get(CategoryViewModel.class);
        quizzViewModel = (QuizzViewModel) new ViewModelProvider(this).get(QuizzViewModel.class);
        userViewModel = (UserViewModel) new ViewModelProvider(this).get(UserViewModel.class);
        if (gameBinding != null) {
            System.out.println("game page ! ");
            gameBinding.setGameViewModel(gameViewModel);
            gameBinding.setCategoryViewModel(categoryViewModel);
            gameBinding.setLifecycleOwner(this);
        }
        gameViewModel.startGame(new QuizzDto(1, 18, 1));
        categoryViewModel.getCategory(18);

        cardView = (CardView)findViewById(R.id.card_1);
         cardView.setOnClickListener(v -> {
             System.out.println("Response 1 clicked ... ");
             sendResonse(0);
        });
        findViewById(R.id.card_2).setOnClickListener(v -> {
            System.out.println("Response 2 clicked ... ");
            sendResonse(1);
        });
        findViewById(R.id.card_3).setOnClickListener(v -> {
            System.out.println("Response 3 clicked ... ");
            sendResonse(2);
        });
        findViewById(R.id.card_4).setOnClickListener(v -> {
            System.out.println("Response 4 clicked ... ");
            sendResonse(3);
        });


        cardView = (CardView)findViewById(R.id.card_1);
        cardView.setOnClickListener(v -> {
            System.out.println("Response 1 clicked ... ");
            sendResonse(0);
        });
        findViewById(R.id.card_2).setOnClickListener(v -> {
            System.out.println("Response 2 clicked ... ");
            sendResonse(1);
        });
        findViewById(R.id.card_3).setOnClickListener(v -> {
            System.out.println("Response 3 clicked ... ");
            sendResonse(2);
        });
        findViewById(R.id.card_4).setOnClickListener(v -> {
            System.out.println("Response 4 clicked ... ");
            sendResonse(3);
        });
        String score = "Score: 0";
        gameBinding.score.setText(score);
        gameBinding.numQuestion.setText((index+1) + "/10");
        gameViewModel.game.observe(this, new Observer<Game>() {
            @Override
            public void onChanged(Game game1) {

                System.out.println(gameViewModel.game.getValue());
                //game = gameViewModel.game.getValue();
                    System.out.println("game objet : " + game);
                    game = game1;
                    quizzList = game.getQuizzes();
                    user = game1.getUser();
                    if (index == 0){
                        currentQuizz = quizzList.get(0);
                        getNextQuestion();
                    }
            }
        });

    }



    private void getNextQuestion(){
        System.out.println("index question : " + index);
        if (this.quizzList != null && quizzList.size() > 0 && index < quizzList.size()){
            currentQuizz = quizzList.get(index);
            gameBinding.txtQuestion.setText(currentQuizz.getQuestion().getLabel());
            gameBinding.textRes1.setText(currentQuizz.getQuestion().getResponses().get(0).getLabel());
            gameBinding.textRes2.setText(currentQuizz.getQuestion().getResponses().get(1).getLabel());
            gameBinding.textRes3.setText(currentQuizz.getQuestion().getResponses().get(2).getLabel());
            gameBinding.textRes4.setText(currentQuizz.getQuestion().getResponses().get(3).getLabel());
            gameBinding.numQuestion.setText((index+1) + "/10");
            index ++;

        }
    }


  private void sendResonse(int responseIndex){
      // currentQuizz;
        boolean responseCorrect = currentQuizz.getQuestion().getResponses().get(responseIndex).isIsCorrect();
        currentQuizz.setCorrect(responseCorrect);
      QuizzRespnse quizzRespnse = new QuizzRespnse();
      quizzRespnse.setCorrect(responseCorrect);
      quizzRespnse.setQuizzId(currentQuizz.getId());
      quizzRespnse.setGameId(game.getId());
        quizzViewModel.sendResponse(quizzRespnse);



        if (responseCorrect){
            Toast.makeText(this, "Bonne reponse", Toast.LENGTH_SHORT).show();
        }else {
            Toast.makeText(this, "Mauvaise reponse!", Toast.LENGTH_SHORT).show();
        }
        quizzViewModel.currentQuizz.observe(this, new Observer<Quizz>() {
            @Override
            public void onChanged(Quizz quizz) {
                System.out.println("Quizz changed! ");
            }
        });
        if (index < quizzList.size()){
            getNextQuestion();
        }else {
            Intent intent = new Intent(GameActivity.this, MainActivity.class);
            startActivity(intent);
        }

      gameViewModel.getGame(game.getId());
      gameViewModel.game.observe(this, new Observer<Game>() {
          @Override
          public void onChanged(Game game) {
              System.out.println("game ici changed :*** ");
              System.out.println(game);
              if (game != null && game.getScore() != null){
                  final String score = "Score: " + game.getScore().getScore();
                  gameBinding.score.setText(score);

              }

          }
      });



  }



}