<?php 
include('conexao.php');

$nome = $_POST['nome_cliente'];
$sobrenome = $_POST['nascimento_cliente'];
$rg_cliente = $_POST['rg_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
if($_POST['genero_cliente'] == ""){

    $genero_cliente = $_POST['outrogenero'];

}else{
    $genero_cliente = $_POST['genero_cliente'];
}

$tipo_treino = $_POST['tipo_treino'];
if(isset($_POST['paga'])){
    $pagamento = "Em dia";
}else if(isset($_POST['atrasada'])){
    $pagamento = "Atrasada";
}

$foto_cliente = $_POST['foto_cliente'];
$email_cliente = $_POST['email_cliente'];
$foto_cliente = $_POST['telefone_cliente'];
$foto_cliente = $_POST['observação_cliente'];

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];

//echo $rua ." ".$numero." ".$cidade." ".$bairro;

$sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cidade', '$estado')";
//$sql .= "('$rua', '$numero', '$bairro', '$cidade', '$estado')"; 
mysqli_query($link, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($link);
echo "Cliente cadastrado com sucesso!";

?>