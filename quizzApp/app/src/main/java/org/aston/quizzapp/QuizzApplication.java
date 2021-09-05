package org.aston.quizzapp;

import android.app.Application;
import android.content.Context;

import dagger.hilt.android.HiltAndroidApp;


@HiltAndroidApp
public class QuizzApplication extends Application {


    private static Context appContext;
    @Override
    public void onCreate() {
        super.onCreate();
        appContext = getApplicationContext();
        /* If you has other classes that need context object to initialize when application is created,
         you can use the appContext here to process. */
    }
    public static Context getAppContext() {
        return appContext;
    }

}