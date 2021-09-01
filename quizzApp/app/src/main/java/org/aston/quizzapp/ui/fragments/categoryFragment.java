 package org.aston.quizzapp.ui.fragments;

import android.content.Intent;
import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.LifecycleOwner;
import androidx.lifecycle.ViewModelProvider;
import androidx.navigation.Navigation;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.FragmentCategoryBinding;
import org.aston.quizzapp.databinding.FragmentHomeBinding;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Quizz;
import org.aston.quizzapp.ui.GameActivity;
import org.aston.quizzapp.viewmodel.CategoryViewModel;
import org.aston.quizzapp.viewmodel.GameViewModel;

import dagger.hilt.android.AndroidEntryPoint;

@AndroidEntryPoint
public class categoryFragment extends Fragment {


     private Button button;
     private FragmentCategoryBinding _biniding;
     private final FragmentCategoryBinding getBinding() {
         return this._biniding;
     }
     public CategoryViewModel categoryViewModel;
     public GameViewModel gameViewModel;




     @Override
     public void onCreate(Bundle savedInstanceState) {
         super.onCreate(savedInstanceState);

     }

     @Override
     public View onCreateView(LayoutInflater inflater, ViewGroup container,
                              Bundle savedInstanceState) {
         this._biniding = FragmentCategoryBinding.inflate(inflater, container, false);
         FragmentCategoryBinding categoryBinding = this.getBinding();
         System.out.println("categoryBinding ");
         System.out.println(categoryBinding);
         View view = categoryBinding.getRoot();
         categoryViewModel = (CategoryViewModel) new ViewModelProvider(requireActivity()).get(CategoryViewModel.class);categoryViewModel.getCategories();
         gameViewModel = (GameViewModel) new ViewModelProvider(requireActivity()).get(GameViewModel.class);categoryViewModel.getCategories();


         if (categoryBinding != null) {
             categoryBinding.setLifecycleOwner((LifecycleOwner)this);
             categoryBinding.setCategoryViewModel(categoryViewModel);
         }
         categoryViewModel.getCategory(1);
         return inflater.inflate(R.layout.fragment_category, container, false);

     }

     @Override
     public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
         super.onViewCreated(view, savedInstanceState);
         button =view.findViewById(R.id.btn_game_page);

         // navigate to game page using btnGame
         button.setOnClickListener(
                 new View.OnClickListener() {
                     @Override
                     public void onClick(View v) {
                         //Navigation.findNavController(view).navigate(R.id.gameFragment);
                         switchActivityGame(1, 1, 1);
                     }
                 }
         );

     }

     private void switchActivityGame() {
         Intent switchActivityIntent = new Intent(getActivity(), GameActivity.class);
         startActivity(switchActivityIntent);
         // ((Activity) getActivity()).overridePendingTransition(0, 0);
     }


    private void switchActivityGame(int userId, int categoryId, int difficulty) {
        QuizzDto quizzDto = new QuizzDto();
        quizzDto.setUserId(userId);
        quizzDto.setCategoryId(categoryId);
        quizzDto.setDifficulty(difficulty);
        // gameViewModel.startGame(quizzDto);
        // gameViewModel.startGame(quizzDto);


        Intent switchActivityIntent = new Intent(getActivity(), GameActivity.class);
        startActivity(switchActivityIntent);



    }
}