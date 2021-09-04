package org.aston.quizzapp.security;

import android.content.Context;
import android.content.SharedPreferences;

import org.aston.quizzapp.R;

public class SessionManager {

    public Context context;
    public static final String USER_TOKEN = "user_token";
    private SharedPreferences prefs;


    public SessionManager(Context context) {
        this.context = context;
        prefs = context.getSharedPreferences(context.getString(R.string.app_name), Context.MODE_PRIVATE);
    }


    /**
     * Function to save auth token
     */
    public void saveAuthToken(String token) {
        SharedPreferences.Editor editor = prefs.edit();
        editor.putString(USER_TOKEN, token);
        editor.apply();
    }

    /**
     * Function to fetch auth token
     */
    public String fetchAuthToken() {
        return prefs.getString(USER_TOKEN, null);
    }
}
