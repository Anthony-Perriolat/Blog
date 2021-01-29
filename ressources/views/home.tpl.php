
<?php include "layouts/header.tpl.php"; ?>
<aside class="d-flex row justify-content-center flex-wrap">
<?php if (empty($arrayhome)):  ?>
    <div class="card-body">
        <p>Cette article est vide</p>
    </div>

<?php else: ?>
<?php foreach ($arrayhome as $row): ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $row["Title"]?></h5>
            <div class="overflow-hidden">
            <p class="card-text "><?= $row["Text"]?></p>
            </div>
            <a href="#" class="btn btn-primary"><?= $row["Pseudo"]?></a>
        </div>
    </div>

<?php endforeach; ?>
<?php endif; ?>
</aside>
<?php include "layouts/footer.tpl.php"; ?>