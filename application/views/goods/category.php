<?php echo validation_errors(); ?>

<?php echo form_open('category/create') ?>

<form>
	<label for="title">name category: </label>
	<input type="input" name="category" placeholder="Add name category"/><br/>
	</br>
	<input type="submit" name="submit" value="Add category" />
</form>
