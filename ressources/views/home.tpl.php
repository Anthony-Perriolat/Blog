
<?php include "layouts/header.tpl.php"; ?>
<aside class="d-flex row justify-content-center">
<?php if (empty($arrayhome)):  ?>   <!-- array empty -->
    <div class="card-body">
        <p>Cette article est vide</p>
    </div>

<?php else: ?>
<?php foreach ($arrayhome as $row): ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"><?= $row["Text"]?></p>
            <a href="#" class="btn btn-primary"><?= $row["Pseudo"]?></a>
        </div>
    </div>

<?php endforeach; ?>
<?php endif; ?>
</aside>
<?php include "layouts/footer.tpl.php"; ?>