package org.aston.quizzapp.security;

import com.google.gson.annotations.SerializedName;

import org.aston.quizzapp.models.User;

public class LoginResponse {
    @SerializedName("statusCode")
    private int statusCode;
    @SerializedName("token")
    private String token;
    @SerializedName("user")
    private User user;
    @SerializedName("refresh_token")
    private String refresh_token;

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

    public void setToken(String token) {
        this.token = token;
    }

    public String getRefresh_token() {
        return refresh_token;
    }

    public void setRefresh_token(String refresh_token) {
        this.refresh_token = refresh_token;
    }
}
