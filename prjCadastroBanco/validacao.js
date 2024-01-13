function Enviar(){




  
    var nome = document.getElementById("nome_id");
    var idade= document.getElementById("idade_id");
    var email = document.getElementById("email_id");

    if(nome.value== "" || idade.value=="" || email.value=="" ){

        alert("Nome não informado!!");

        nome.focus();


    }





    
}