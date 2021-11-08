<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'programador');
define('SENHA', 'etccba');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;


