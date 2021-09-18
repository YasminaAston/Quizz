package org.aston.quizzapp.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.os.Bundle;
import android.util.Patterns;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import org.aston.quizzapp.R;
import org.aston.quizzapp.data.network.UserApi;
import org.aston.quizzapp.databinding.ActivityRegistrationBinding;
import org.aston.quizzapp.models.User;
import org.aston.quizzapp.security.SessionManager;
import org.aston.quizzapp.util.Constants;
import org.aston.quizzapp.viewmodel.UserViewModel;

import dagger.hilt.android.AndroidEntryPoint;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

@AndroidEntryPoint
public class RegistrationActivity extends AppCompatActivity {

    private UserViewModel userViewModel;
    private ActivityRegistrationBinding registrationBinding;
    private Button registrationBtn;
    private TextView backToLoginTv;
    public SessionManager sessionManager;
    private boolean isEmailValid;
    private boolean isPasswordValid;
    private boolean areUserNamesValid;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registration);
        registrationBinding = DataBindingUtil.setContentView(this, R.layout.activity_registration);
        userViewModel = (UserViewModel) new ViewModelProvider(this).get(UserViewModel.class);

        if (registrationBinding != null) {
            System.out.println("registration page ! ");
            registrationBinding.setLifecycleOwner(this);
        }

        backToLoginTv = findViewById(R.id.back_to_login_link_tv);
        backToLoginTv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(RegistrationActivity.this, LoginActivity.class);
                startActivity(intent);
            }
        });

        registrationBtn = findViewById(R.id.registration_btn);
        registrationBtn.setOnClickListener(v -> {
            SignUp();
        });

        userViewModel.userMutableLiveData.observe(this, new Observer<User>() {
            @Override
            public void onChanged(User user) {
                if(user != null){
                    System.out.println("user ////////////////// ");
                    System.out.println(user);
                    Intent intent = new Intent(RegistrationActivity.this, LoginActivity.class);
                    startActivity(intent);
                }
            }
        });
    }

    private void SignUp() {
        String firstname = registrationBinding.firstnameEt.getText().toString();
        String lastname = registrationBinding.lastnameEt.getText().toString();
        String email = registrationBinding.emailEt.getText().toString();
        String password = registrationBinding.passwordEt.getText().toString();

        if (email.isEmpty() || !Patterns.EMAIL_ADDRESS.matcher(email).matches()) {
            isEmailValid = false;
            Toast.makeText(RegistrationActivity.this, "Veuillez renseigner une adresse mail valide", Toast.LENGTH_LONG).show();
        } else {
            isEmailValid = true;
        }

        if (password.isEmpty() || password.length() < 4) {
            isPasswordValid = false;
            Toast.makeText(RegistrationActivity.this, "Veuillez renseigner un mot de passe d'au moins 4 caractères", Toast.LENGTH_LONG).show();
        } else {
            isPasswordValid = true;
        }

        if (firstname.length() > 3 && lastname.length() > 3) {
            areUserNamesValid = true;
        } else {
            Toast.makeText(RegistrationActivity.this, "Veuillez renseigner un prénom, nom et nom d'utilisateur d'au moins 3 caractères", Toast.LENGTH_LONG).show();
            areUserNamesValid = false;
        }

        if (isEmailValid && isPasswordValid && areUserNamesValid) {
            User user = new User();
            user.setEmail(email);
            user.setFirstname(firstname);
            user.setLastname(lastname);
            user.setPassword(password);

            userViewModel.registration(user);
        }
    }

}