<?php

include_once("templates/header.php");
?>
<div class="container">
<h1>Cadastrar Produto</h1>
<form action="<?=$BASE_URL?>config/process.php" method="POST">

<input type="hidden" name="type" value="create">
<div class="form-group">
    <label for="nome"></label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="digite o nome do produto">
</div>
<div class="form-group">
    <label for="marca"></label>
    <input type="text" class="form-control" id="marca" name="marca" placeholder="digite a marca do produto">
</div>

<div class="form-group">
    <label for="valor"></label>
    <input type="text" class="form-control" id="valor" name="valor" placeholder="digite o valor do produto">
</div>



<div class="form-group">
        <label for="descricao">descricao</label>
        <textarea  type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira as observações" rows=3>  </textarea>
    </div>


    <button type="submit" class="btn btn-primary">Cadastrar</button>


</form>

</div>


<?php

include_once("templates/footer.php");
?>