package com.example.diabeties;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.widget.ProgressBar;

public class MainActivity extends Activity {
	ProgressBar bar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
       // bar = (ProgressBar) findViewById(R.id.progressBar1);
        new Thread(new Task()).start();
    }

    public void startProgress(View view) {
    	 
        bar.setProgress(0);
        //new Thread(new Task()).start();
    }
 
    class Task implements Runnable {
        @Override
        public void run() {
            //for (int i = 0; i <= 10; i++) {
              //  final int value = i;
                try {
                	Intent iv=new Intent(MainActivity.this,DiaActivity.class);
                	startActivity(iv);
                    Thread.sleep(1000);
                } catch (InterruptedException e) {
                    e.printStackTrace();
                }
               /// bar.setProgress(value);
 
            //}
        }
 
    }    
}
