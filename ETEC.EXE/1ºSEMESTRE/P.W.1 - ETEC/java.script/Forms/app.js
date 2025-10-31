$('#btEnviar').click(function (e) {
    e.preventDefault();
   
});
 
$('#txtTelefone').mask("(00) 0000-0000");

$('#txtCpf').mask("000.000.000-00", {reverse: true});