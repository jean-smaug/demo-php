<form method="get" action="/search">
    <div class="mb-3">
        <label for="search" class="form-label">Recherche</label>
        <input type="search" class="form-control" id="search" name="search">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    Tu as cherché : <?php echo $_GET["search"] ?>
</form>
