package org.aston.quizzapp.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.databinding.ViewDataBinding;

import android.os.Bundle;

import org.aston.quizzapp.R;
import org.aston.quizzapp.databinding.ActivityLoginBinding;
import org.aston.quizzapp.databinding.ActivityRegistrationBinding;
import org.aston.quizzapp.viewmodel.UserViewModel;

public class RegistrationActivity extends AppCompatActivity {

    private UserViewModel userViewModel;
    private ActivityRegistrationBinding registrationBinding;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registration);
        registrationBinding = DataBindingUtil.setContentView(this, R.layout.activity_registration);
    }
}