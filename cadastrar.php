<?php include_once 'topo.php';

$nomedoproduto = $_POST["Nome do Produto"];
$valor = $_POST["valor"];


include_once 'conexao.php';

$sql = "insert into produto values(NULL,'".$nomedoproduto."','".$valor."',)";

$result = mysqli_query($con,$sql);

if($result){
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao Gravar!";
}

mysqli_close($con);
echo "<script>alert('".$msg."');location.href = 'painel.php';
</script>";

include_once 'rodape.php';

?>