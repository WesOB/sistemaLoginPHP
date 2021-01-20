<?php
Class Usuario{
  private $pdo;
  public $msgErro = "";
  public function conectar($nome, $host, $usuario, $senha){
    global $pdo;
    try {
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
    } catch (PDOException $e) {
      msgErro = $e->getMessage();

    }catch (Exception $e) {
      msgErro = $e->getMessage();
   }

  }
  public function cadastrar(){
    global $pdo;

  }
  public function logar(){
      global $pdo;
  }


}





 ?>
