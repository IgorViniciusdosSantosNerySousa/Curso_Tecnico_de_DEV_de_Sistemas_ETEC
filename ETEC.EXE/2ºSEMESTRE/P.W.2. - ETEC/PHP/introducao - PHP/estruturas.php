<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $idade=20;
    if($idade >= 18){
       echo "Pode iniciar habilitação <hr>";     
    }else{
        echo "Não pode iniciar habilitação";
    }

        for($x=1;$x<=10;$x+=3){
            echo "x vale $x <hr>";
        }

    //quanto vale $x nessa linha

        $x=1;
        while($x>1){
            echo "<hr> $x";
            $x--;
        }
        do{
            echo "<hr> $x";
            $x++;
        }while($x<=10);


        $cores = ['azul','amarelo','vermelho','preto','verde'];
        foreach($cores as $cor){
            echo "<hr> A cor é $cor";
        }
    ?>
</body>
</html>