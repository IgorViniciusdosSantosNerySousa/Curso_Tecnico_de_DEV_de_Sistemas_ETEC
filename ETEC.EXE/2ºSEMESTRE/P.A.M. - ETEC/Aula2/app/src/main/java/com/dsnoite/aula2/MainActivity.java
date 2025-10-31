package com.dsnoite.aula2;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        TextView texto = findViewById(R.id.text);
        Button btn = findViewById(R.id.btn_click);

        btn.setOnClickListener(v -> {
            texto.setText("Pornô Gay");

        });
    }
}