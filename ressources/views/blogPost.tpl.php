<?php include "layouts/header.tpl.php"; ?>
<?php if (empty($arrayArticle)):  ?>
    <?php require 'ressources/views/erros/404.php'; ?>
<?php else: ?>
<?php foreach ($arrayArticle as $row): ?>
<section class="row">
    <div class="col-2"></div>
<div class="col-8 shadow-lg p-3 my-5 bg-white rounded">
    <h1><?=$row['Title']?></h1>
    <h3 class="fst-italic"><?=$row['Pseudo']?></h3>
    <p><?=$row['Text']?></p>
</div>
    <div class="col-2"></div>
</section>
<?php endforeach; ?>

<?php foreach ($arrayArticleCom as $row): ?>
<section class="row">
    <div class="col-2"></div>
    <div class="accordion  " id="accordionExample">
      <div class="accordion-item ">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               <?=$row['Pseudo']?>

          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
              <?=$row['Commentaire']?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-2"></div>

</section>
<?php endforeach; ?>
<?php endif; ?>
<?php include "layouts/footer.tpl.php"; ?>
