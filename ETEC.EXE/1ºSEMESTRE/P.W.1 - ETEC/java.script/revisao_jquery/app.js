//$=seletor,()<--o que será selecionado.

$('.central>div').click(function (e) {
    e.preventDefault();
    classe = $(this).attr('class');
    if(classe=='ocupado'){
        //esta ocupado
        opcao = confirm("Deseja cancelar a reserva?");
        if(opcao==true){
            $(this).attr('class','');

        }
    }else{
        //caso vazio
        opcao = confirm("Deseja fazer a reserva?");
        if(opcao==true){
            $(this).attr('class','ocupado');
    }
}
    
    console.log($(this));
});