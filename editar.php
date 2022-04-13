<?php include 'topo.php';


$id = base64_decode($_GET["id"]);

$sql = "select * from produto where idproduto=".$id;

include_once 'conexao.php';

$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}


?>

<h3>Atualizar Produtos</h3>

<form action = "atualizar.php" method = "post">
<br>
<b> Nome do Produto:</b><br>
<input type = "text" name = "nomedoproduto" id = "nomedoproduto" class = "form-control" value = "<?php echo $reg["nomedoproduto"]; ?>">
</br>
<b>Valor:</b><br>
<input type = "text" name = "valor" id = "valor" class = "form-control" value = "<?php echo $reg["valor"]; ?>">
</br>

<br></br>
<input type = "hidden" name = "id" value = " <?php echo $reg["idproduto"]; ?>">
<input type = "submit" value = "Atualizar" class="btn btn-primary" >
<input type = "reset" value = "Limpar" class="btn btn-danger">
</form>

<?php include 'rodape.php'; ?>