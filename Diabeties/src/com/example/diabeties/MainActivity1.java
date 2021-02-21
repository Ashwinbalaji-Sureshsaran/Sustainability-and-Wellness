package com.example.diabeties;

import java.util.ArrayList;
import android.os.Bundle;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.view.Menu;
import android.widget.GridView;

public class MainActivity1 extends Activity {
	 GridView gv;
     Context context;    
        ArrayList prgmName;    
        public static String [] prgmNameList={"Dia","Astma"};
    
        public static int [] prgmImages=
        {    	
    	R.drawable.ic_launcher,
    	R.drawable.ic_launcher	
    	
    	};    
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_activity1);
               
        
        gv=(GridView) findViewById(R.id.gridView1);      
        gv.setAdapter(new CustomAdapter(this, prgmNameList,prgmImages));
    }


    
}
