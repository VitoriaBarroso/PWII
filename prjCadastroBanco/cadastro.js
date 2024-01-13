

function enviar(){

if(document.dados.nome.value=="" ||
document.dados.nome.value.length < 4)
{
    // alert para o nome
alert( "Preencha campo nome sem erros!!" );

document.dados.nome.focus();
return false;
}
    // idade
if (document.dados.idade.value=="")
{
alert( "Preencha o campo com sua idade!!" );
document.dados.idade.focus();
return false;
}
    //  email
if( document.dados.email.value=="" ||
document.dados.email.value.indexOf('@')==-1 ||
document.dados.email.value.indexOf('.')==-1 )
{
alert( "Preencha campo e-mail sem erros!!" );
document.dados.email.focus();
return false;
}

return true;
}
