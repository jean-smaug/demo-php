<form method="post" action="/wines">
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text"  class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Password</label>
        <input type="number" class="form-control" id="year" name="year">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php foreach ($wines as $wine): ?>

    <div>
        <span><?= $wine["name"] ?> - <?= $wine["year"] ?></span>
        <form action="/wines" method="post">
            <input type="hidden" name="type" value="DELETE">
            <input type="hidden" name="id" value="<?= $wine["id"] ?>">

            <button class="btn btn-danger" type="submit">X</button>
        </form>
    </div>

<?php endforeach; ?>

