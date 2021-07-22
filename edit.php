<?php

include_once("templates/header.php");
?>
<div class="container">
    <div class="main-title"><H1 class="text-center">Editar Produtos</H1></div>

    <form action="<?=$BASE_URL?>config/process.php" method="POST"  id="create-form">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?=$produto["id"]?>">

    <div class="form-group">
            <label for="nome">Nome do produto</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?=$produto["nome"]?>">
           
        </div>

        <div class="form-group">
            <label for="marca">marca do produto</label>
            <input type="text" class="form-control" id="marca" name="marca" value="<?=$produto["marca"]?>">
           
        </div>

        <div class="form-group">
            <label for="descricao">Valor do produto</label>
            <input type="text" class="form-control" id="valor" name="valor" value="<?=$produto["valor"]?>">
           
        </div>

        <div class="form-group">
        <label for="descricao">descricao</label>
        <textarea  type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição" rows=3> <?=$produto["Descricao"]?> </textarea>
    </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>


    </form>
</div>

<?php

include_once("templates/footer.php");
?>