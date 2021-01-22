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
    <div id="corpo-form">
      <form class="" method="post">
        <h1>Entrar</h1>
        <input type="email" name="email" value="" placeholder="Usuário">
        <input type="password" name="senha" value="" placeholder="Senha">
        <input type="submit" value="ACESSAR">
        <a href="cadastrar.php ?>">Ainda não é inscrito <strong>Cadastre-se!</strong></a>
      </form>
    </div>
    <?php
    if(isset($_POST['email'])){
      $email = addslashes($_POST['email']);
      $senha = addslashes($_POST['senha']);
      //veriricar se está preenchido
      if(!empty($email) && !empty($senha)){
        $u->conectar("projeto_login", "localhost", "root", "");
        if ($u->msgErro == "") {
          if ($u->logar($email, $senha)) {
            header("location: AreaPrivada.php");
          }else {
            ?>
              <div class="msg-erro">
                Email e/ou senha não foram encontrados!
              </div>
            <?php
          }
        } else {
          ?>
            <div class="msg-erro">
              <?php echo "Erro: ".$u->msgErro; ?>
            </div>
          <?php
        }

      }else {
        ?>
          <div class="msg-erro">
            Preencha todos os campos!
          </div>
        <?php
      }
    }
    ?>
  </body>
</html>
