<?php
  require_once 'classes/usuarios.php';

  $u = new Usuario;

 ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projeto Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
  </head>
  <body>
    <div id="corpo-form-cad">
      <form class="" method="post">
        <h1>Cadastrar</h1>
        <input type="text" name="nome" value="" placeholder="Nome Completo" maxlength="30">
        <input type="text" name="telefone" value="" placeholder="Telefone" maxlength="30">
        <input type="email" name="email" value="" placeholder="Usuário" maxlength="40">
        <input type="password" name="senha" value="" placeholder="Senha" maxlength="15">
        <input type="password" name="confsenha" value="" placeholder="Confirmar senha"  maxlength="15">
        <input type="submit" value="CADASTRAR">
      </form>
    </div>
    <?php
    //verificar se clicou no botão
      if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $senha = addslashes($_POST['senha']);
        $confirmarsenha = addslashes($_POST['confsenha']);
        //veriricar se está preenchido
        if(!empty($nome) && !empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confirmarsenha)){
          $u->conectar("projeto_login", "localhost", "root", "");
          if($u->msgErro == ""){ //se esta vazio está ok
            if($senha == $confirmarsenha){
              if ($u->cadastrar($nome, $telefone, $email, $senha)) {
                echo "Cadastrado com sucesso! Acesse para entrar!";
              }else {
                echo "Email já cadastrado!";
              }

            }else{
              echo "Senha e confirmar Senha não correspondem!";
            }
          }else{
            echo "Erro: ".$u->msgErro;
          }
        }else {
          echo "Preencha todos os campos!";
        }

      }


    ?>
  </body>
</html>
