<?php
// Configuração de cabeçalhos para evitar o cache
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<html>
<style>
    .message-box {
    position:relative;
    display: flex;
    width:100%;
    margin: 5px 0;
    }

    .message-box p {
    position:relative;
    right: 0;
    text-align: right;
    max-width: 65%;
    padding: 12px;
    background: linear-gradient(#ff914c, #ff914c, #f7a46f, transparent);
    border-radius: 10px;
    font-family: 'Dosis';
    color: black;
    text-decoration: none;
    font-size: 1.1em;
    }

    .message-box.my-message p::before {
    content : '';
    position: absolute;
    top: 0;
    right: -12px;
    width: 20px;
    height: 20px;
    background: linear-gradient(135deg, #ff914c 0%, #ff914c 50%, transparent 50%, transparent);
    }

    .message-box p span {
    display: block;
    margin-top: 5px;
    font-size: 0.8em;
    opacity: 0.5;
    }

    .my-message {
    justify-content: flex-end;
    }

    .friend-message p {
    background: linear-gradient(#00bf63, #00bf63, #7eda55, transparent);
    }

    .friend-message {
    justify-content: flex-start;

    }

    .chat-container .my-message i {
    color: yellow;
    }

    .message-box.friend-message::before {
    content : '';
    position: absolute;
    top: 0;
    left: -12px;
    width: 20px;
    height: 20px;
    background: linear-gradient(225deg, #fff 0%, #fff 50%, transparent 50%, transparent);
    }
</style>
<script>
    function atualizaChat(){

        var input = "C/;/" + document.getElementById('name').value + "21:40";
        var bagulho = document.getElementById('name');
        bagulho.value = "";

        location.reload();
        //pasta a ser salvo o arquivo
        var pasta="../Public/assets/chat.txt";
        //carrega o txt
        var esc = dados.OpenTextFile(pasta, 1, true);
        //escreve o que foi passado no parametro texto que é o texto contido no TextArea
        esc.WriteLine(input);
        //fecha o txt
        esc.Close();
    }
</script>
<div style="display: flex;">
<div class="flex-shrink-0 p-3" style="overflow-y: auto; background: linear-gradient(#00bf63, #7eda55, #ff914c, #ff914c); border-radius: 25px 5px 25px 5px; width: 15%; position:relative; left:1%;">
    <button id="natalia" style="margin-bottom: 20px; display: flex; background-color: transparent; width: 100%; heigth: 80px; border-radius: 25px 5px 5px 5px; border: 2px solid black">
        <img class="border border-5 border-success rounded-circle" alt="FotoDePerfil" src="../Public/assets/img/estelio.jpg" width = "60" height = "60" style="margin-top: 5px;"/>
        <div>
            <h6></h6>
            <h4 style="text-align: left;">Estelio Natalia</h4>
            <h6 style="text-align: left;">Online</h6>
        </div>
    </button> 

    <button id="leo" style="margin-bottom: 20px; display: flex; background-color: transparent; width: 100%; heigth: 80px; border-radius: 5px 5px 5px 5px; border: 1px solid black">
        <img class="border border-5 border-success rounded-circle" alt="FotoDePerfil" src="../Public/assets/img/leo.png" width = "60" height = "60" style="margin-top: 5px"/>
        <div>
            <h6></h6>
            <h4 style="text-align: left;">Leo</h4>
            <h6 style="text-align: left;">Offline</h6>
        </div>
    </button> 

    <button id="muzy" style="margin-bottom: 20px; display: flex; background-color: transparent; width: 100%; heigth: 80px; border-radius: 5px 5px 5px 5px; border: 1px solid black">
        <img class="border border-5 border-success rounded-circle" alt="FotoDePerfil" src="../Public/assets/img/muzy.png" width = "60" height = "60" style="margin-top: 5px"/>
        <div>
            <h6></h6>
            <h4 style="text-align: left;">Muzy</h4>
            <h6 style="text-align: left;">Offline</h6>
        </div>
    </button> 

    <button id="renato" style="margin-bottom: 20px; display: flex; background-color: transparent; width: 100%; heigth: 80px; border-radius: 5px 5px 25px 5px; border: 1px solid black">
        <img class="border border-5 border-success rounded-circle" alt="FotoDePerfil" src="../Public/assets/img/renato.png" width = "60" height = "60" style="margin-top: 5px"/>
        <div>
            <h6></h6>
            <h4 style="text-align: left;">Renato</h4>
            <h6 style="text-align: left;">Online</h6>
        </div>
    </button> 
</div>

<div class="flex-shrink-0 p-3" style="display: inline-block; background: linear-gradient(#00bf63,  #7eda55, #ff914c, #ff914c); border-radius: 25px 5px 25px 5px; width: 81%; position:relative; left:2%; z-index:3; height: 100%">
    <div class="flex-shrink-0 p-3" style="z-index: 2; background: url('../Public/assets/img/fundo.jpg'); border-radius: 25px 5px 25px 5px; height: 100%">
        <a class="d-flex align-items-center pb-3" height="676">
        <svg class="bi pe-none me-2" width="30" height="660"></svg>
        <div class="line" style="width:100%;">
            <div id="chat-container" width=100% style=" padding: 50px;" >
                    <script>
                        fetch('../Public/assets/chatshintakavaraestelionatalia.txt')
                        .then(response => response.text())
                        .then(data => {
                            for (var i = 1; i <= 5; i++) {
                                var linhas = data.split('\n');
                                if ((linhas.length-6+i) >= 0){
                                    var linha = linhas[linhas.length-6+i];    
                                    var atributos = linha.split('/;/');
                                    var sender = atributos[0];
                                    var mensagem = atributos[1];
                                    var hora = atributos[2];
                                    // Criar uma nova div

                                    var div = document.createElement('div');
                                    div.id = 'minha-div' + i

                                    if (sender === 'C') {
                                        div.className = 'message-box friend-message';
                                    }

                                    if (sender === 'N') {
                                        div.className = 'message-box my-message';
                                    }

                                    // Criar o parágrafo
                                    var p = document.createElement('p');
                                    p.innerHTML = mensagem + "<br><span>" + hora + "</span>";

                                    // Adicionar o parágrafo à div
                                    div.appendChild(p);

                                    // Adicionar a div ao elemento pai desejado
                                    var elementoPai = document.getElementById('chat-container');
                                    elementoPai.appendChild(div);
                                    }
                                }
                            })
                        .catch(error => {
                            // Trate erros de leitura do arquivo
                            console.error('Ocorreu um erro ao ler o arquivo:', error);
                        });
                        
                    </script>
                </div>
            <div width=100% style="display: flex; width:100%;">
                <svg class="bi pe-none me-2" width="30"  height="60"></svg>
                <input class="fs-4 fonteDosis" type="text" id="name" placeholder="Digite sua mensagem..." style="width: 85%; border-radius: 25px; position:relative; left:-3%; background: #f4f4f4"></input>
                <button style= "background-color: #ff914c; width: 11%;  border-radius: 25px; position:relative; left:-1%;" onmouseover="this.style.backgroundColor='#ffae7d';" onmouseout="this.style.backgroundColor='#ff914c';" onclick="atualizaChat()">
                    <img src="../Public/assets/img/send.png" style="width: 42px; height: 42px;"></img>
                </button>
            </div>
        </div>
        </a>
        </div>
    </div>
</div>
</html>
<script>
  var loginButton = document.getElementById("login_button");
  loginButton.textContent = "Sair"
</script>