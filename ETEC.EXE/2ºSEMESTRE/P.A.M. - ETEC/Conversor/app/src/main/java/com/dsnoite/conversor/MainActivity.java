package com.dsnoite.conversor;

import android.os.Bundle;
import android.view.Gravity;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioGroup;
import android.widget.TextView;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;
import androidx.transition.Slide;

public class MainActivity extends AppCompatActivity {

EditText entradaMoeda;
Button btConverter;
TextView txtResultado;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        entradaMoeda = findViewById(R.id.editBRL);
        btConverter = findViewById(R.id.btConverter);
        txtResultado = findViewById(R.id.txtResultado);

        btConverter.setOnClickListener(v ->{
           converter();


        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
    private void converter(){
        String BRL = entradaMoeda.getText().toString();
        RadioGroup radioGroup = findViewById(R.id.radioGroup);
        int checked = radioGroup.getCheckedRadioButtonId();

        if(BRL.equals("")){
            txtResultado.setText("Preencha todos os Campos!!");
            Toast t = Toast.makeText(this,"Preencha todos os Campos!!", Toast.LENGTH_LONG);
            t.setGravity(Gravity.TOP | Gravity.CENTER_HORIZONTAL, 0,200);
            t.show();
        }else{
            Double real = Double.parseDouble(BRL);
            if(checked == R.id.radioUSD){
                Double resultado = real/5.75;
                txtResultado.setText("$" + resultado);
            }else if(checked == R.id.radioEUR){
                Double resultado = real/6.09;
                txtResultado.setText("€" + resultado);
            }else if(checked == R.id.radioJPY){
                Double resultado = real/0.037;
                txtResultado.setText("¥" + resultado);
            }
        }
    }
}