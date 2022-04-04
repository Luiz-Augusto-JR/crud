// usando jquery pra pegar o button e aplicar uma função nele atravez do onclick
$("#btn_gravar").on("click",function(){

    //armazenando nessas variaveis o valor que esta dentro do input nome e email
    var txt_nome = $("#nome").val();
    var txt_email = $("#email").val();

    // usando o ajax pra mandar esses dados para o aquivo que eu quero e ao mesmo 
    // tempo retornar uma respota enquando executa a função e dps que executa tb
    $.ajax({
        url: "create.php",
        type: "post",
        data:{
            nome: txt_nome, email: txt_email
        },
        //definindo oq aparece antes da tarefa ser concluida
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
        //definindo oq aparece dps da tarefa ser concluida
    }).done(function(){
        $("#resposta").html("Dados registrados com sucesso...");
    })
})


// usando jquery pra pegar o button e aplicar uma função nele atravez do onclick
$("#btn_atualizar").on("click",function(){
    //armazenando nessas variaveis o valor que esta dentro do input nome, email e id
    var txt_nome = $("#nome").val();
    var txt_email = $("#email").val();
    var txt_id = $("#id").val();
    
    // usando o ajax pra mandar esses dados para o aquivo que eu quero e ao mesmo 
    // tempo retornar uma respota enquando executa a função e dps que executa tb
    $.ajax({
        url: "update.php",
        type: "post",
        data:{
            nome: txt_nome, email: txt_email, id: txt_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(){
        $("#resposta").html("Dados atualizado com sucesso...");
        //assim q atualizar acaba voltando pro read.php
        window.location="read.php";
    })
})

const buscarRegistros = () => {
    $.ajax({
        url: "read.php",
        type: "get",        
        data: null,
        beforeSend : function(){
            $("#registros").html("Buscando registros...");
        }
    }).done(function(responseJSON){
        const response = JSON.parse(responseJSON)

        
        const html = response.map(record => `
            ID: ${record.id} <br/>
            Nome: ${record.nome} <br/>
            E-mail: ${record.email} <br/>
            
            <a class='att' href=formUpdate.php?id=${record.id}>Atualizar</a>
            <a class='delete' href=delete.php?id=${record.id}>Excluir</a>
            <hr />
        `)        

        $("#registros").html(html);
    }) 
}