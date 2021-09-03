package org.aston.quizzapp.security;

import com.google.gson.annotations.SerializedName;

import org.aston.quizzapp.models.User;

public class LoginResponse {
    @SerializedName("status_code")
    public int statusCode;
    @SerializedName("auth_token")
    public String authToken;
    @SerializedName("user")
    public User user;

    public int getStatusCode() {
        return statusCode;
    }

    public void setStatusCode(int statusCode) {
        this.statusCode = statusCode;
    }

    public String getAuthToken() {
        return authToken;
    }

    @Override
    public String toString() {
        return "LoginResponse{" +
                "statusCode=" + statusCode +
                ", authToken='" + authToken + '\'' +
                ", user=" + user +
                '}';
    }

    public void setAuthToken(String authToken) {
        this.authToken = authToken;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }
}
