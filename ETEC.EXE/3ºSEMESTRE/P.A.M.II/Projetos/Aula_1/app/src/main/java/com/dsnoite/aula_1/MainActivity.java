package com.dsnoite.aula_1;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.widget.Button;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    RadioButton resp1;
    RadioButton resp2;
    RadioButton resp3;
    TextView result;
    Button btVerify;

    @SuppressLint("MissingInflatedId")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        resp1 = findViewById(R.id.resp1);
        resp2 = findViewById(R.id.resp2);
        resp3 = findViewById(R.id.resp3);
        result = findViewById(R.id.result);
        btVerify = findViewById(R.id.btVerify);

        btVerify.setOnClickListener(v ->{
            verificar();


        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }

    private void verificar(){
        RadioGroup Perguntas = findViewById(R.id.Perguntas);
        int checked = Perguntas.getCheckedRadioButtonId();

        if (result.equals("")) {
            result.setText("Escolha uma opção!");

        }else {
            if (checked == R.id.resp1) {
                result.setText("MANO????");
            } else if (checked == R.id.resp2) {
                result.setText("...Olha bem");
            } else if (checked == R.id.resp3) {
                result.setText("ACERTOOOOO AEEEE!!!");
            }
        }
    }
}