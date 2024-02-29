<article class="center">
	<?= session()->getFlashdata('error') ?>
	<?= validation_list_errors() ?>
	
	<form action="../news" method="post">
	    <?= csrf_field() ?>
	
	    <label for="title"><h2>Title</h2></label>
	    <input type="input" name="title" value="<?= set_value('title') ?>">
	    <br>
	
	    <label for="body"><h2>Text</h2></label>
	    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
	    <br><br>
	
	    <input type="submit" name="submit" value="Create news item">
	</form>
</article>
