<!--<h2>--><?php //echo $title ?><!--</h2>-->

<?php echo validation_errors(); ?>

<?php echo form_open('goods') ?>

<form>
<label for="title">name good: </label>
<input type="input" name="name" placeholder="Add name good"/><br/>
</br>
	<select name="category" required="required">
		<option value="">Select a category: </option>
		<?php foreach ($categories as $category){?>
			<option value="<?php echo $category['id']?>"><?php echo $category['name'] ?></option>
		<?php } ?>
	</select>
	<a href="<?php echo site_url('category/create') ?>">Add category</a>
	</br>
	</br>
<input type="submit" name="submit" value="Add good" />
</form>
