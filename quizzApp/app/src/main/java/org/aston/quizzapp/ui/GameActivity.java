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
import androidx.navigation.NavController;
import androidx.navigation.Navigation;
import androidx.navigation.ui.AppBarConfiguration;
import androidx.navigation.ui.NavigationUI;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.ActivityGameBinding;
import org.aston.quizzapp.databinding.FragmentGameBinding;
import org.aston.quizzapp.models.Game;
import org.aston.quizzapp.models.Quizz;
import org.aston.quizzapp.viewmodel.CategoryViewModel;
import org.aston.quizzapp.viewmodel.GameViewModel;
import org.aston.quizzapp.viewmodel.QuizzViewModel;

import dagger.hilt.android.AndroidEntryPoint;

@AndroidEntryPoint
public class GameActivity extends AppCompatActivity {


    private AppBarConfiguration appBarConfiguration;
    private CardView cardView;
    public GameViewModel gameViewModel;
    private CategoryViewModel categoryViewModel;
    private QuizzViewModel quizzViewModel;
    private ActivityGameBinding gameBinding;
    private Quizz currentQuizz;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        gameBinding = DataBindingUtil.setContentView(this, R.layout.activity_game);
        gameViewModel = (GameViewModel) new ViewModelProvider(this).get(GameViewModel.class);
        categoryViewModel = (CategoryViewModel) new ViewModelProvider(this).get(CategoryViewModel.class);
        quizzViewModel = (QuizzViewModel) new ViewModelProvider(this).get(QuizzViewModel.class);

        if (gameBinding != null) {
            System.out.println("game page ! ");
            gameBinding.setLifecycleOwner((LifecycleOwner)this);
            gameBinding.setGameViewModel(gameViewModel);
        }
         cardView = (CardView)findViewById(R.id.card_1);
         cardView.setOnClickListener(v -> {
             System.out.println("VieCard clicked ... ");
        });


        gameViewModel.game.observe(this, (Observer) o -> {
            System.out.println("game changed ! ");
            System.out.println(gameViewModel.game.getValue());
        });

    }




    // System.out.println(gameViewModel.gameMutableLiveData.getValue());




}