package com.example.myapplication;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.Gravity;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
EditText txtValue;
EditText txtValue2;
Button btnCalc;
Button btnCalculate;
TextView txtResult;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txtValue = findViewById(R.id.txtValue);
        txtValue2 = findViewById(R.id.txtValue2);
        btnCalc = findViewById(R.id.btnCalc);
        btnCalculate = findViewById(R.id.btnCalculate);
        txtResult = findViewById(R.id.txtResult);

        btnCalculate.setOnClickListener(v ->{
            calcular();
        });


        Button btnCalc = findViewById(R.id.btnCalc);

        btnCalc.setOnClickListener(v ->{
            Intent intent = new Intent(this, Calcular.class);
            startActivity(intent);
        });

        Button btnExit = findViewById(R.id.btnExit);

        btnExit.setOnClickListener(v ->{
            Intent intent = new Intent(this, Sair.class);
            startActivity(intent);
        });
    }

    private void calcular(){

        String Valor  = txtValue.getText().toString();
        String Valor2  = txtValue2.getText().toString();
        RadioGroup radioGroup = findViewById(R.id.rdOpcoes);
        int checked = radioGroup.getCheckedRadioButtonId();

        if(Valor.equals("") || Valor2.equals("")){
            txtResult.setText("Preencha todos os Campos!!");
            Toast t = Toast.makeText(this,"Preencha todos os Campos!!", Toast.LENGTH_LONG);
            t.setGravity(Gravity.TOP | Gravity.CENTER_HORIZONTAL, 0,200);
            t.show();
        }else{
            Double valor = Double.parseDouble(Valor);
            Double valor2 = Double.parseDouble(Valor2);
            if(checked == R.id.rdAdd){
                Double resultado = valor + valor2;
                txtResult.setText("Resultado:" + resultado);
            }else if(checked == R.id.rdSub){
                Double resultado = valor - valor2;
                txtResult.setText("Resultado:" + resultado);
            }else if(checked == R.id.rdMulti){
                Double resultado = valor * valor2;
                txtResult.setText("Resultado:" + resultado);
            }else if(checked == R.id.rdDiv){
                Double resultado = valor / valor2;
                txtResult.setText("Resultado:" + resultado);
            }
        }
    }

}