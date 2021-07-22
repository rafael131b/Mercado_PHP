<?php
include_once("templates/header.php");
?>
 <div class="container">
 <?php if(isset($printmsg)&& $printmsg!=""):?>
 <p id="msg"><?=$printmsg?></p>
 <?php endif?>
 <h1 class="text-center mt-2">Meus Produtos</h1>
 <?php if(count($produtos)>0):?>
    <table class="table table-striped table-hover" id="produtos-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">nome</th>
                <th scope="col">marca</th>
                <th scope="col">valor</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto):?>
                <tr>
                <td scope="row" class="col-id"><?= $produto["id"] ?></td>
                <td scope="row"><?= $produto["nome"] ?></td>
                <td scope="row"><?= $produto["marca"] ?></td>
                <td scope="row"><?= $produto["valor"] ?></td>
            
                <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $produto["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $produto["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $produto["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
                </tr>

            <?php endforeach;?>
        
        </tbody>
    
    </table>

    <?php else:?>

        <p id="empty-list-text">Ainda não há Produtos em sua lista, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
 
    
    
 <?php endif ?>
 
 </div>

<?php
include_once("templates/footer.php");
?>

