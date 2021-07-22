<?php

include_once("templates/header.php");
?>

<div class="container "  id="view">
<?php include_once("templates/backBtn.html"); ?>
<div>
<h1 class="main-title"><?=$produto["nome"]?></h1>
<p class="bold"><?=$produto["marca"]?></p>
<p><?=$produto["Descricao"]?></p>
</div>



</div>
<?php

include_once("templates/footer.php");
?>