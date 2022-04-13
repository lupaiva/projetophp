<?php include 'topo.php'; ?>
<div class = "container">
<h3>Novo Produto</h3>
<form action = "cadastrar.php" method = "post">
<br>
<b>Nome do Produto:</b><br>
<input type = "text" name = "nomedoproduto" id = "nomedoproduto" class = "form-control">
</br>
<b>Valor:</b><br>
<input type = "text" name = "valor" id = "valor" class = "form-control">
</br>
<br></br>

<input type = "submit" value = "Cadastrar Produto" class="btn btn-primary" >
<input type = "reset" value = "Limpar" class="btn btn-danger">
</form>
</div>

<?php include 'rodape.php'; ?>