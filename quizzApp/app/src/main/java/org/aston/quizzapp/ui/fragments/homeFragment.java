package org.aston.quizzapp.ui.fragments;

import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.LifecycleOwner;
import androidx.navigation.Navigation;


import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import androidx.fragment.app.Fragment;
import androidx.lifecycle.ViewModelProvider;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.FragmentHomeBinding;
import org.aston.quizzapp.viewmodel.CategoryViewModel;

import dagger.hilt.android.AndroidEntryPoint;

/**
 * A simple {@link Fragment} subclass.
 * create an instance of this fragment.
 */

@AndroidEntryPoint
public class homeFragment extends Fragment {


    private Button button;
    private FragmentHomeBinding _biniding;
    private final FragmentHomeBinding getBinding() {
        return this._biniding;
    }
    CategoryViewModel categoryViewModel;




    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        this._biniding = FragmentHomeBinding.inflate(inflater, container, false);
        FragmentHomeBinding homeBinding = this.getBinding();
        System.out.println("homeBinding ");
        System.out.println(homeBinding);
        View view = homeBinding.getRoot();
        categoryViewModel = (CategoryViewModel) new ViewModelProvider(requireActivity()).get(CategoryViewModel.class);categoryViewModel.getCategories();


        if (homeBinding != null) {
            homeBinding.setLifecycleOwner((LifecycleOwner)this);
            homeBinding.setCategoryViewModel(categoryViewModel);
        }
        categoryViewModel.getCategory(1);
        return inflater.inflate(R.layout.fragment_home, container, false);


    }
}