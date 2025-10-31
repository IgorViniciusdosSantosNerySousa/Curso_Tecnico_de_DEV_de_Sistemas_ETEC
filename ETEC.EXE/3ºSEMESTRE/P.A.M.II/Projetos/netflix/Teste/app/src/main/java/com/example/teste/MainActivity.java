package com.example.teste;

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

    EditText txtEmail;
    EditText txtSenha;
    Button btnEnviar;
    TextView txtResult;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        txtEmail = findViewById(R.id.txtEmail);
        txtSenha = findViewById(R.id.txtSenha);
        btnEnviar = findViewById(R.id.btnEnviar);

        btnEnviar.setOnClickListener(v ->{
            enviar();
        });

        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }

    private void enviar(){
        if(txtEmail.equals("") || txtSenha.equals("")){
            txtResult.setText("PREENCHA TODOS OS CAMPOS!!");
            txtEmail.setText("");
            txtSenha.setText("");
        } else{
            txtResult.setText("ENVIADO! APROVEITE.");
            txtEmail.setText("");
            txtSenha.setText("");
        }
    }
}



