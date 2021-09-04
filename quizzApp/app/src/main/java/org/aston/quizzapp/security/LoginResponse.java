package org.aston.quizzapp.security;

import com.google.gson.annotations.SerializedName;

import org.aston.quizzapp.models.User;

public class LoginResponse {
    @SerializedName("statusCode")
    public int statusCode;
    @SerializedName("token")
    public String token;
    @SerializedName("user")
    public User user;

    public int getStatusCode() {
        return statusCode;
    }

    public void setStatusCode(int statusCode) {
        this.statusCode = statusCode;
    }

    public String getToken() {
        return token;
    }

    @Override
    public String toString() {
        return "LoginResponse{" +
                "statusCode=" + statusCode +
                ", token='" + token + '\'' +
                ", user=" + user +
                '}';
    }

    public void setAuthToken(String authToken) {
        this.token = authToken;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }
}
