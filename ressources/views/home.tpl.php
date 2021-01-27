
<?php include "layouts/header.tpl.php"; ?>
<aside class="d-flex row justify-content-center">
<?php foreach ($arrayArticle as $row): ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text"><?= $row["Text"]?></p>
        <a href="#" class="btn btn-primary"><?= $row["Pseudo"]?></a>
    </div>
</div>

<?php endforeach; ?>
</aside>
<?php include "layouts/footer.tpl.php"; ?>