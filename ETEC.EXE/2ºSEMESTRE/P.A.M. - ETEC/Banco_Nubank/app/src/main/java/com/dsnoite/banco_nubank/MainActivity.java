package com.dsnoite.banco_nubank;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button btn = findViewById(R.id.btn_extract);

        btn.setOnClickListener(v ->{
            Intent intent = new Intent(this,Extrato.class);
            startActivity(intent);
        });

        Button btn2 = findViewById(R.id.btn_deposit);

        btn.setOnClickListener(v ->{
            Intent intent = new Intent(this,Depositar.class);
            startActivity(intent);
        });

        Button btn3 = findViewById(R.id.btn_card);

        btn.setOnClickListener(v ->{
            Intent intent = new Intent(this, Cartao.class);
        });
    }
}