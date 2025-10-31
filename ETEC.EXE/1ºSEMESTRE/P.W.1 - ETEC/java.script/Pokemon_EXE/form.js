$('#btEnviar').click(function (e) {
    e.preventDefault();
   
  });
  
  $('#txtTelefone').mask("(00) 00000-0000");
  
  $('#txtCpf').mask("000.000.000-00", {reverse: true});

  $('#txtRg').mask("00.000.000-0", {reverse: true});
