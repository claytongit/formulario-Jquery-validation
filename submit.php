<?php

$nome       = isset($_POST['nome'])       ?$_POST['nome']       :null;
$nascimento = isset($_POST['nascimento']) ?$_POST['nascimento'] :null;
$contato    = isset($_POST['contato'])    ?$_POST['contato']    :null;
$cep        = isset($_POST['cep'])        ?$_POST['cep']        :null;
$rua        = isset($_POST['rua'])        ?$_POST['rua']        :null;
$bairro     = isset($_POST['bairro'])     ?$_POST['bairro']     :null;
$cidade     = isset($_POST['cidade'])     ?$_POST['cidade']     :null;
$usuario    = isset($_POST['usuario'])    ?$_POST['usuario']    :null;
$email      = isset($_POST['email'])      ?$_POST['email']      :null;
$senha      = isset($_POST['senha2'])     ?$_POST['senha2']     :null;

$dados = [
    "Nome"       => $nome,
    "Nascimento" => $nascimento,
    "Contato"    => $contato,
    "CEP"        => $cep,
    "Rua"        => $rua,
    "Bairro"     => $bairro,
    "Cidade"     => $cidade,
    "Usuario"    => $usuario,
    "Email"      => $email,
    "Senha"      => $senha
];

echo json_encode($dados);

?>