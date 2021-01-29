<?php include "layouts/header.tpl.php"; ?>

<section class="mx-5">
    <form class="row g-3" action="index.php?action=PostCreate&id=1" method="post">
    <div class="col-md-4">
        <label for="Title" class="form-label">Titre</label>
        <input type="text" class="form-control" id="Title" name="Title" value="" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
<!--    <div class="col-md-4">-->
<!--        <label for="Pseudo" class="form-label">Pseudo</label>-->
<!--        <input type="text" class="form-control" id="Pseudo" name="Pseudo" value="" required>-->
<!--    </div>-->
        <div class="col-md-4">
            <label for="Pseudo" class="form-label">Pseudo</label>
            <input type="number" class="form-control" id="Pseudo" name="Pseudo" value="3" required>
        </div>
    <div class="col-md-4">
        <label for="Importance" class="form-label">Importance</label>
        <select class="form-select" id="Importance" name="Importance" required>
            <option selected disabled value="">Choisissez</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
        <div class="col-md-2">
            <label for="dateS" class="form-label">Date de Début</label>
            <div class="input-group has-validation">
                <input type="date" class="form-control" id="dateS" name="dateS" required>
            </div>
        </div>
        <div class="col-md-2">
            <label for="dateE" class="form-label">Date de Fin</label>
            <div class="input-group has-validation">
                <input type="date" class="form-control" id="dateE" name="dateE" required>
            </div>
        </div>
    <div class="col-12">
        <div class="input-group">
            <span class="input-group-text" style='height: 500px;'>Votre Article</span>
            <textarea class="form-control" id="Texte" name="Texte" required ></textarea>
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>
</section>

<?php include "layouts/footer.tpl.php"; ?>