package com.example.diabeties;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONException;
import org.json.JSONObject;

import android.os.AsyncTask;
import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Spinner;
import android.widget.Toast;

public class DiaActivity extends Activity {

	Spinner sp1,sp2;
	EditText ed1,ed2,ed3,ed4,ed5,ed6,ed7,ed8,ed9;
	String una;
	Button btnimg;
	
	 private static String URLL = "http://10.0.2.2:800/test_android/index1.php";

	    private static final String KEY_EMPTY = "";


	    JSONParser jsonParser = new JSONParser();

	    int i = 0;

	    private String plae;
	    private String ddate;
	    private String institute;
	    private String address;
	    private String Email;
	    private String Phone;


	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_dia);
		
		
		//sp1=(Spinner)findViewById(R.id.editText4);
		
		//sp2=(Spinner)findViewById(R.id.spinner2);
		
		
		ed1=(EditText)findViewById(R.id.editText1);
		
		ed2=(EditText)findViewById(R.id.editText2);
		
		ed3=(EditText)findViewById(R.id.editText3);
		
		ed4=(EditText)findViewById(R.id.editText4);

		ed5=(EditText)findViewById(R.id.editText5);

		ed6=(EditText)findViewById(R.id.editText6);

		ed7=(EditText)findViewById(R.id.editText7);
		ed8=(EditText)findViewById(R.id.editText8);
		ed9=(EditText)findViewById(R.id.editText9);

		
		btnimg=(Button)findViewById(R.id.button1);
		
		// Intent hh=getIntent();
	       //  una=hh.getStringExtra("uname");
	      //  String pwd=hh.getStringExtra("pass");
		
		btnimg.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View arg0) {
				// TODO Auto-generated method stub
				
				
				plae=ed1.getText().toString();
				
				ddate=ed2.getText().toString();
				
				institute=ed3.getText().toString();
				
				 if (validateInputs()) {

	                    AttemptLogin attemptLogin= new AttemptLogin();
	                    attemptLogin.execute(
	                    		ed1.getText().toString(),
	                    		ed2.getText().toString(),
	                    		ed3.getText().toString(),
	                    		ed4.getText().toString(),
	                    		ed5.getText().toString(),
	                    		ed6.getText().toString(),
	                    		ed7.getText().toString(),
	                    		ed8.getText().toString(),
	                    		ed9.getText().toString(),
	                    		ed1.getText().toString(),
	                    		ed1.getText().toString());
				 }
			}
		});
		
		
	}

	 private boolean validateInputs() {


	        if (KEY_EMPTY.equals(plae)) {
	        	ed1.setError("place Name cannot be empty");
	        	ed1.requestFocus();
	            return false;

	        }
	        if (KEY_EMPTY.equals(ddate)) {
	        	ed2.setError("date cannot be empty");
	        	ed2.requestFocus();
	            return false;
	        }	 
	        
	        if (KEY_EMPTY.equals(institute)) {
	        	ed3.setError("date cannot be empty");
	        	ed3.requestFocus();
	            return false;
	        }	

	        return true;
	    }
	 private class AttemptLogin extends AsyncTask<String, String, JSONObject> {

	        @Override

	        protected void onPreExecute() {

	            super.onPreExecute();

	        }

	        @Override

	        protected JSONObject doInBackground(String... args) {



	            String email = args[2];
	            String password = args[1];
	            String name= args[0];

	            String email1 = args[5];
	            String password1 = args[4];
	            String name1= args[3];

	            String email2 = args[8];
	            String password2 = args[7];
	            String name2= args[6];

	            // String email3 = args[11];
	            String password3 = args[10];
	            String name3= args[9];

	            ArrayList<NameValuePair> params = new ArrayList<NameValuePair>();
	            params.add(new BasicNameValuePair("username", name));
	            params.add(new BasicNameValuePair("password", password));
	            params.add(new BasicNameValuePair("email",email));
	            
	            params.add(new BasicNameValuePair("username1", name1));
	            params.add(new BasicNameValuePair("password1", password1));
	            params.add(new BasicNameValuePair("email1",email1));

	            params.add(new BasicNameValuePair("username2", name2));
	            params.add(new BasicNameValuePair("password2", password2));
	            params.add(new BasicNameValuePair("email2",email2));

	            params.add(new BasicNameValuePair("username3", name3));
	            params.add(new BasicNameValuePair("password3", password3));
	           // params.add(new BasicNameValuePair("email3", email3));


	            JSONObject json = jsonParser.makeHttpRequest(URLL, "POST", params);


	            return json;

	        }

	        protected void onPostExecute(JSONObject result) {

	            // dismiss the dialog once product deleted
	            //Toast.makeText(getApplicationContext(),"DDDDDD", Toast.LENGTH_LONG).show();

	            try {
	                if (result != null) {
	                    Toast.makeText(getApplicationContext(),result.getString("message"), Toast.LENGTH_LONG).show();
	                } else {
	                    Toast.makeText(getApplicationContext(), "Unable to retrieve any data from server", Toast.LENGTH_LONG).show();
	                }
	            } catch (JSONException e) {
	                e.printStackTrace();
	            }


	        }

	    }
	}


