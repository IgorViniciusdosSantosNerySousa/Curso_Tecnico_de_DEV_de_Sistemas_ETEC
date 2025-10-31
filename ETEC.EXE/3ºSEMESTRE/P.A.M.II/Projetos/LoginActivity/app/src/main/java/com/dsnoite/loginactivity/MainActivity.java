package com.dsnoite.loginactivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    TextView result;
    EditText txtEmail;
    EditText txtPsw;
    Button btnAutenticar;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        result = findViewById(R.id.result);
        txtEmail = findViewById(R.id.txtEmail);
        txtPsw = findViewById(R.id.txtPsw);
        btnAutenticar = findViewById(R.id.btnAutenticar);

        btnAutenticar.setOnClickListener(v -> {
            autenticar();
        });


        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }

    private void autenticar() {
        if(txtEmail.equals("") || txtPsw.equals("")){
            result.setText("Preencha todos os campos!");
        } else{
            result.setText("Autenticado com Sucesso!");
        }

        if (btnAutenticar.isActivated()){
            txtEmail.setText("");
            txtPsw.setText("");
        }
    }
}