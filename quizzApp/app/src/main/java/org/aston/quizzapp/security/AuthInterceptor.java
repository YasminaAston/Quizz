package org.aston.quizzapp.security;

import android.app.Application;
import android.content.Context;

import org.aston.quizzapp.QuizzApplication;

import java.io.IOException;

import okhttp3.Interceptor;
import okhttp3.Request;
import okhttp3.Response;

public class AuthInterceptor implements Interceptor {



    private SessionManager sessionManager;
    Context context = QuizzApplication.getAppContext();

    public AuthInterceptor() {
        sessionManager = new SessionManager(context);
    }

    @Override
    public Response intercept(Chain chain) throws IOException {
        Request.Builder requestBuilder = chain.request().newBuilder();
        if (sessionManager.fetchAuthToken() != null){
            requestBuilder.addHeader("Authorization", "Bearer " + sessionManager.fetchAuthToken());

        }
        return chain.proceed(requestBuilder.build());
    }
}
