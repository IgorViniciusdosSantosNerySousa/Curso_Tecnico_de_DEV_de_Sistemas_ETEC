<?php
    session_start();
    if(isset($_SESSION['numero'])) {
        $numero = rand(1, 100);
        $_SESSION['numero']=$numero;
        $_SESSION['tentativas']=0;
    }        
?>

<form action="jogo.act.php" method="post">
    <p>Digite um Número.</p>
    <p><input type="number" name="palpite" id="txtTentativa"></p>
    <p><input type="submit" value="Vericar"></p>
</form>

<script>
    document.querySelector('txtTentativa').focus();
</script>
<?php
    
    if(isset($_SESSION['msg'])){
        echo "$_SESSION[msg]<hr>";
    }
    $tentativas=0;
    if($_SESSION['tentativas']>0){
        echo "$_SESSION[tentativas]<br>";
    }
?>