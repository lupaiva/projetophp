<?php
   
    $id = $_POST ["id"];
    $nomedoproduto = $_POST["Nome do Produto"];
    $valor = $_POST["valor"];


    include_once 'conexao.php';

    $sql = "update produto set Nome do Produto = '".$nomedoproduto."',valor = '".$valor."',"' where idproduto =" .$id;

    $rs = mysqli_query($con,$sql);
    if($rs){
        $msg = "Atualizado com Sucesso!";
    }else{
        $msg = "Erro ao Atualizar";
    }
    mysqli_close($con);
    echo "<script>alert('".$msg."');location.href = 'consulta.php';
    
    </script>";
?>