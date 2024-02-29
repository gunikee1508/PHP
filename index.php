<?php

require_once("config.php");
/*
$sql = new Sql(); // ele sabe encontrar a classe, encontraar a classe Sql que tá lá em sql.php
$usuarios = $sql->select("SELECT * FROM tb_usuarios"); // achando sql, já posso jogar o comando no banco de dados. o retorno jogo tudo na variavel $usuarios.
echo json_encode($usuarios); 
*/

/*
$root = new Usuario();
$root->loadById(2);
echo $root;
*/

//Carregando uma lista de usuários
//$lista = Usuario::search("jo");
//echo json_encode($lista);

//carrega um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("root", "12345");

echo $usuario;
*/


$aluno = new Usuario("aluno", "@alun0");

/*
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@alun0");
*/
$aluno->insert();

echo $aluno;
?>