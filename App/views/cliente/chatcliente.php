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
    background: linear-gradient(#00bf63, #00bf63, #7eda55, transparent);
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
    background: linear-gradient(135deg, #00bf63 0%, #00bf63 50%, transparent 50%, transparent);
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
    background: linear-gradient(#ff914c, #ff914c, #f7a46f, transparent);
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
    function atualizaChat() {
        var bagulho = document.getElementById('name');
        var input = "C/;/" + bagulho.value + "21:40";
        bagulho.value = "";

        // // Abre o arquivo chat.txt em modo de escrita
        // var fs = require('fs');
        // var filePath = '../Public/assets/chatshintakavaraestelionatalia.txt';

        // fs.appendFile(filePath, input + '\n', function (err) {
        //     if (err) throw err;
        //     console.log('Nova mensagem adicionada ao arquivo chat.txt');
        // });

        location.reload();
    }
</script>
<div  style="display: flex;">
<div class="flex-shrink-0 p-3" style="display: inline-block; background: linear-gradient(#ff914c, #ff914c, #7eda55, #00bf63); border-radius: 25px 5px 25px 5px; width: 15%; position:relative; left:1%;">
    <a class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30"  height="355"></svg>
      <div>
      <div>
      <p class="fs-3 fonteDosis" style="text-align: center; width: 180px;">NUTRICIONISTA</p>
      </div>
      <div>
      <img class="border border-5 border-success rounded-circle shadow-4-strong" alt="FotoDePerfil" src="../Public/assets/img/shin.jpg" width = "180" height = "180"/>
      </div>
      <p class="fs-4 fonteDosis" style="text-align: center; width: 180px;">Shin Takavara</p>
      </div>
    </a>
    <ul>
      <li class="mb-1">
        <p class="fs-4 fonteDosis">Minhas redes</p>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li>
                <img src="../Public/assets/img/twitter.png" width = "25" height = "25" style="border-radius: 25%;"/>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none">Twitter</a>
            </li>
            <li>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none" style="position:relative; left: 25px;">@shin_takavara</a>
            </li>
            <li>
                <img src="../Public/assets/img/insta.png" width = "25" height = "25" style="border-radius: 25%;"/>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none">Instagram</a>
            </li>
            <li>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none" style="position:relative; left: 25px;">@shin_takavara</a>
            </li>
            <li>
                <img src="../Public/assets/img/face.png" width = "25" height = "25" style="border-radius: 25%;"/>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none">Facebook</a>
            </li>
            <li>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none" style="position:relative; left: 25px;">@shin_takavara</a>
            </li>
            <li>
                <img src="../Public/assets/img/email.png" width = "25" height = "25" style="border-radius: 25%;"/>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none">E-mail</a>
            </li>
            <li>
                <a href="#" class="fs-5 link-body-emphasis fonteIBM text-decoration-none" style="position:relative; left: 25px;">shin.tv@gmail.com</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
</div>

<div class="flex-shrink-0 p-3" style="display: inline-block; background: linear-gradient(#ff914c, #ff914c, #7eda55, #00bf63); border-radius: 25px 5px 25px 5px; width: 81%; position:relative; left:2%; z-index:2; height: 100%">
    <div class="flex-shrink-0 p-3" style="z-index: 1; background: url('../Public/assets/img/fundo.jpg'); border-radius: 25px 5px 25px 5px; height: 100%">
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

                                    if (sender === 'N') {
                                        div.className = 'message-box friend-message';
                                    }

                                    if (sender === 'C') {
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
                <button style= "background-color: #00bf63; width: 11%;  border-radius: 25px; position:relative; left:-1%;" onmouseover="this.style.backgroundColor='#7eda55';" onmouseout="this.style.backgroundColor='#00bf63';" onclick="atualizaChat()">
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