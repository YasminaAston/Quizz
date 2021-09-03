package org.aston.quizzapp.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;
import androidx.navigation.Navigation;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import org.aston.quizzapp.R;
import org.aston.quizzapp.data.UserRepository;
import org.aston.quizzapp.security.LoginRequest;
import org.aston.quizzapp.security.LoginResponse;
import org.aston.quizzapp.security.SessionManager;
import org.aston.quizzapp.viewmodel.UserViewModel;

import dagger.hilt.android.AndroidEntryPoint;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

@AndroidEntryPoint
public class LoginActivity extends AppCompatActivity {

    private Button loginBtn;
    private UserViewModel userViewModel;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        userViewModel = (UserViewModel) new ViewModelProvider(this).get(UserViewModel.class);
        loginBtn = findViewById(R.id.login_btn);
        loginBtn.setOnClickListener(v -> {
            onLogin();
        });
    }

   public void onLogin() {
       userViewModel.onLogin();
       Intent intent = new Intent(this, MainActivity.class);
       startActivity(intent);
   }
}