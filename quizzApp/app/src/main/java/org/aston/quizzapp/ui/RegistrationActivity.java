package org.aston.quizzapp.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.databinding.DataBindingUtil;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.os.Bundle;
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

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registration);
        registrationBinding = DataBindingUtil.setContentView(this, R.layout.activity_registration);
        userViewModel = (UserViewModel) new ViewModelProvider(this).get(UserViewModel.class);

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
    }

    private void SignUp() {
        String firstname = registrationBinding.firstnameEt.getText().toString();
        String lastname = registrationBinding.lastnameEt.getText().toString();
        String username = registrationBinding.usernameEt.getText().toString();
        String email = registrationBinding.emailEt.getText().toString();
        String password = registrationBinding.passwordEt.getText().toString();

        User user = new User();
        user.setEmail(email);
        user.setFirstname(firstname);
        user.setLastname(lastname);
        user.setUsername(username);
        user.setPassword(password);

        //userViewModel.registration(new RegistrationRequest(firstname, lastname,username, email, password));
        //userViewModel.registration(user);

        Retrofit.Builder builder = new Retrofit.Builder()
                .baseUrl(Constants.API_URL)
                .addConverterFactory(GsonConverterFactory.create());

        Retrofit retrofit = builder.build();

        UserApi userApi = retrofit.create(UserApi.class);
        Call<User> call = userApi.addUser(user);

        call.enqueue(new Callback<User>() {
            @Override
            public void onResponse(Call<User> call, Response<User> response) {
                if (response.isSuccessful()) {
                    Toast.makeText(RegistrationActivity.this, "Vous avez crée un compte vous pouvez maintenant vous connecter", Toast.LENGTH_LONG).show();
                    System.out.println("greatSuccess : " + response.body());
                    Intent intent = new Intent(RegistrationActivity.this, LoginActivity.class);
                    startActivity(intent);
                } else {
                    System.out.println("onTheResponseOK but : " + response.body());
                }
            }

            @Override
            public void onFailure(Call<User> call, Throwable t) {
                System.out.println("registration didn't worked" + t);
            }
        });

    }

}