<h1>Nouveau chapitre</h1>
<form method="post">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Titre du chapitre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
    </div>
    <textarea id="mytextarea">Hello, World!</textarea>
    <div class="text-left">
        <a href="#" class="btn btn-primary">Publier</a>
    </div>

</form>

<script src="https://cdn.tiny.cloud/1/70e6jobl7u7xxhwzi187ucfmlkd9zmy8tr29fh36wmfqzeaw/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: '#mytextarea',
        language: 'fr_FR'
    });
</script>