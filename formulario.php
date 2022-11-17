<?php

if(isset($_POST['submit'])){

include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $Estado = $_POST['Estado'];
    $Endereço = $_POST['Endereço'];
    $nacionalidade = $_POST['nacionalidade'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,senha,telefone,sexo,data_nascimento,cidade,estado,endereco,nacionalidade)
        VALUES('$nome','$email','$senha','$telefone','$sexo','$nascimento','$cidade','$Estado','$Endereço','$nacionalidade')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ImigraKaisen</title>
    <meta name="description" content="Fundada em 2021, a ONG ImigraKaisen é uma organização não governamental que tem como objetivo promover, organizar, realizar e articular ações que visem à construção de uma política migratória respeitosa dos direitos humanos de imigrantes e pessoas em situação de refúgio.">

    <link rel="icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css/style(1).css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="intro-img-cadastro">
        <header class="header-bg">
            <div class="header container">
                <a href="./home.html">
                    <img src="./img/imigrakaisen.svg" width="200" height="140" alt="ImigraKaisen">
                </a>

                <nav aria-label="primaria">
                    <ul class="header-menu font-3-s cor-0">
                        <li><a href="./sobreNos.html">Sobre o ImigraKaisen</a></li>
                        <li><a href="./moradia.html">Moradia</a></li>
                        <li><a href="./aprenderPort.html">Aprender Português</a></li>
                        <li><a href="./faleConosco.html">Fale Conosco</a></li>
                        <li><a href="./doador.html">Seja um doador!</a></li>
                        <li><button class="loginbutton container font-3-s cor-11" name="login" value="login"><a href="login.php">Login</a></button></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="introducao-bg">
            <div class="introducao container">
                <div class="introducao-conteudo">
                    <h1 class="font-1-xxl cor-0">Faça já sua conta no Imigra Kaizen!<span class="cor-p1">.</span></h1>
                </div>
        </main>

        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend><b>Fórmulário de Cadastro</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="sexo" value="feminino" required>
                    <label for="feminino">feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="sexo" value="masculino" required>
                    <label for="masculino">masculino</label>
                    <br>
                    <input type="radio" id="outro" name="sexo" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="Estado" id="Estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="Endereço" id="Endereço" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="nacionalidade" id="nacionalidade" class="inputUser" required>
                        <label for="endereco" class="labelInput">Nacionalidade</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>

        <footer class="footer-bg">
            <div class="footer container">
              <img src="./img/imigrakaisen.svg" width="200" height="100" alt="ImigraKaisen">
              <div class="footer-contato">
                <h3 class="font-2-l-b cor-0">Contato</h3>
                <ul class="font-2-m cor-3">
                  <li><a href="tel:+552199999999">+55 11 9999-0000</a></li>
                  <li><a href="mailto:contato@imigrakaisen.com">contato@imigrakaisen.com</a></li>
                  <li>Avenida Paulista, 505 - Paulista</li>
                  <li>São Paulo - SP</li>
                </ul>
                <div class="footer-redes">
                  <a href="./">
                    <img src="./img/redes/instagram.svg" width="32" height="32" alt="Instagram">
                  </a>
                  <a href="./">
                    <img src="./img/redes/facebook.svg" width="32" height="32" alt="Facebook">
                  </a>
                  <a href="./">
                    <img src="./img/redes/youtube.svg" width="32" height="32" alt="Youtube">
                  </a>
                </div>
              </div>
              <div class="footer-informacoes">
                <h3 class="font-2-l-b cor-0">Informações</h3>
                <nav>
                  <ul class="font-1-m cor-3">
                    <li><a href="./sobreNos.html">Sobre a ImigraKaisen</a></li>
                    <li><a href="./moradia.html">Moradia</a></li>
                    <li><a href="./aprenderPort.html">Aprender Português</a></li>
                    <li><a href="./doador.html">Seja um doador!</a></li>
                  </ul>
                </nav>
              </div>
              <p class="footer-copy font-2-m cor-0">ImigraKaisen © Alguns direitos reservados.</p>
            </div>
          </footer>

</body>

</html>