<?php
    include_once 'topo.php';
    
    include_once 'conexao.php';
    $sql = "select * from produto ORDER BY bebida ASC";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0){
    ?>
    <div class = "container">
    <br>
    <h3>Consulta de Comidas</h3>
    <br>

    <?php
      echo "Seja Bem Vindo(a), ".$_SESSION["nome"];

      ?>
    
    <br>
    </br>
    <table class="table table-dark table-striped">
        <tr>
            <th> Nome do Produto</th>
            <th>Valor</th>
                 
        </tr>
    <?php
    while($linha = mysqli_fetch_array($rs)){
        ?>
        <tr>
            <td><?php echo $linha["nomedoproduto"]; ?></td>
            <td><?php echo $linha["valor"]; ?></td>
          
        </tr>
    </div>
        <?php
    }?>
    </table>
    <?php
    }else{
        echo"Nenhum produto cadastrado";
    }
    
    mysqli_close($con);
    include_once 'rodape.php';
    ?>