<label for="title">Filtering by category: </label>
<select id ="select" name="category" required="required">
	<option value="">All categories </option>
	<?php foreach ($categories as $category){?>
		<option value="<?php echo $category['id']?>"><?php echo $category['name'] ?></option>
	<?php } ?>
</select>
</br>
</br>
<label for="title">Filtering by status: </label>
<select id ="status" name="status" required="required">
	<option value="">All status </option>
			<option value="1">Bought</option>
	        <option value="0">Not bought </option>
</select>
