package org.aston.quizzapp.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.navigation.Navigation;

import android.content.Context;
import android.content.Intent;
import android.graphics.Color;
import android.os.Bundle;
import android.util.Patterns;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import org.aston.quizzapp.R;
import org.aston.quizzapp.data.UserRepository;
import org.aston.quizzapp.databinding.ActivityLoginBinding;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.security.LoginRequest;
import org.aston.quizzapp.security.LoginResponse;
import org.aston.quizzapp.security.SessionManager;
import org.aston.quizzapp.viewmodel.UserViewModel;

import javax.inject.Inject;

import dagger.hilt.android.AndroidEntryPoint;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

@AndroidEntryPoint
public class LoginActivity extends AppCompatActivity {

    private Button loginBtn;
    private TextView registerMeLink;
    private UserViewModel userViewModel;
    public SessionManager sessionManager;
    private ActivityLoginBinding loginBinding;
    private boolean isEmailValid;
    private boolean isPasswordValid;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        loginBinding = DataBindingUtil.setContentView(this, R.layout.activity_login);

        userViewModel = (UserViewModel) new ViewModelProvider(this).get(UserViewModel.class);

        if (loginBinding != null) {
            System.out.println("game page ! ");
            loginBinding.setLifecycleOwner(this);
        }
        sessionManager = new SessionManager(getApplicationContext());
        if(!sessionManager.fetchAuthToken().equals(null)) {
            Intent intent = new Intent(LoginActivity.this, MainActivity.class);
            startActivity(intent);
        }

        loginBtn = findViewById(R.id.login_btn);
        //// login opération ///// + token saved automatic
        loginBtn.setOnClickListener(v -> {
            String email = loginBinding.emailEt.getText().toString();
            String pwd = loginBinding.passwordEt.getText().toString();

            if (email.isEmpty() || !Patterns.EMAIL_ADDRESS.matcher(email).matches()) {
                isEmailValid = false;
                Toast.makeText(LoginActivity.this, "Veuillez renseigner une adresse mail valide", Toast.LENGTH_LONG).show();
            } else  {
                isEmailValid = true;
            }

            if (pwd.isEmpty() || pwd.length() < 4) {
                isPasswordValid = false;
                Toast.makeText(LoginActivity.this, "Veuillez renseigner un mot de passe d'au moins 4 caractères", Toast.LENGTH_LONG).show();
            } else  {
                isPasswordValid = true;
            }

            if(isEmailValid && isPasswordValid) {

                userViewModel.onLogin(new LoginRequest(email, pwd));
               String token = sessionManager.fetchAuthToken();
                System.out.println("token");
                System.out.println(token);
               if (!token.equals(null)) {
                   Intent intent = new Intent(LoginActivity.this, MainActivity.class);
                   startActivity(intent);
               }
            }
    });

        registerMeLink = findViewById(R.id.register_me_link_textview);
        registerMeLink.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(LoginActivity.this, RegistrationActivity.class);
                startActivity(intent);
            }
          });

        userViewModel.userMutableLiveData.observe(this, new Observer<User>() {
            @Override
            public void onChanged(User user) {
                if(user != null){
                    System.out.println("user ////////////////// ");
                    System.out.println(user);
                    Intent intent = new Intent(LoginActivity.this, MainActivity.class);
                    startActivity(intent);
                }
            }
        });

    }

   public void onLogin(LoginRequest loginRequest) {
         userViewModel.onLogin(loginRequest);

   }

}