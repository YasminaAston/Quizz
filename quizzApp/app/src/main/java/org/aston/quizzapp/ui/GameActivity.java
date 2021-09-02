package org.aston.quizzapp.ui;

import android.content.Context;
import android.os.Bundle;

import com.google.android.material.snackbar.Snackbar;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.util.AttributeSet;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

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
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;
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
    private Quizz currentQuizz;
    private int index = 0;
    private User user;
    private Game game;
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
        gameViewModel.startGame(new QuizzDto(1, 1, 1));
        categoryViewModel.getCategory(1);

        cardView = (CardView)findViewById(R.id.card_1);
         cardView.setOnClickListener(v -> {
             System.out.println("Response 1 clicked ... ");
             getNextQuestion(quizzList);
        });
        findViewById(R.id.card_2).setOnClickListener(v -> {
            System.out.println("Response 2 clicked ... ");
            getNextQuestion(quizzList);
        });
        findViewById(R.id.card_3).setOnClickListener(v -> {
            System.out.println("Response 3 clicked ... ");
            getNextQuestion(quizzList);
        });
        findViewById(R.id.card_4).setOnClickListener(v -> {
            System.out.println("Response 4 clicked ... ");
            getNextQuestion(quizzList);
        });

            gameViewModel.game.observe(this, new Observer<Game>() {
                @Override
                public void onChanged(Game game) {

            System.out.println(gameViewModel.game.getValue());
            game = gameViewModel.game.getValue();
            quizzList = game.getQuizzes();
            user = game.getUser();
            index = 0;
            getNextQuestion(quizzList);
                }
            });

    }



    private void getNextQuestion(List<Quizz> quizzList){
        if (quizzList.size() > 0 && index < quizzList.size()){
            gameBinding.txtQuestion.setText(quizzList.get(index).getQuestion().getLabel());
            gameBinding.textRes1.setText(quizzList.get(index).getQuestion().getResponses().get(0).getLabel());
            gameBinding.textRes2.setText(quizzList.get(index).getQuestion().getResponses().get(1).getLabel());
            gameBinding.textRes3.setText(quizzList.get(index).getQuestion().getResponses().get(2).getLabel());
            gameBinding.textRes4.setText(quizzList.get(index).getQuestion().getResponses().get(3).getLabel());
            index ++;
        }
    }





}