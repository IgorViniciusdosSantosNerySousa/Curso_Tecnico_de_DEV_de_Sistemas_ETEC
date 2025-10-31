package com.dsnoite.cadastro;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    TextView alerta;
    EditText txtNome;
    EditText txtEmail;
    View numPhone;
    Number numCPF;
    Number numRG;
    Number numPhone;
    Button btnCadastrar;




    @SuppressLint({"WrongViewCast", "MissingInflatedId"})
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        txtNome = findViewById(R.id.txtNome);
        txtEmail = findViewById(R.id.txtEmail);
        numPhone = findViewById(R.id.numPhone);
        numCPF = findViewById(R.id.numCPF);
        numRG = findViewById(R.id.numRG);
        btnCadastrar = findViewById(R.id.btnCadastrar);

        btnCadastrar.setOnClickListener(v -> {
            cadastrar();
        });
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
    }
    public void cadastrar(){
        if(txtNome.equals("") || txtEmail.equals("") || numPhone.equals("") || numCPF.equals("") || numRG.equals("")){
            alerta.setText("Preencha todos os campos!");
        } else{
            alerta.setText("Cadastrado com Sucesso!");
        }
    }

}