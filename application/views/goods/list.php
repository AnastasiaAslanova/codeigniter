<div id = "table" class="p-6 bg-white" style="margin: auto">
	<table style="border:transparent; border-collapse: collapse; width: 60%; margin: auto" class="table-fixed rounded-md">
<?php foreach ($goods as $good): ?>
		<tr good_id="<?php echo $good['id']?>">
			<td style="border: transparent">
				<div style="word-wrap: break-word" class="py-2 pl-2">
					<form action="list.php">
					<input type="checkbox" class="status" name="a" <?php echo $good['status'] == 0 ? '' : 'checked' ?> value="<?php echo $good['id'] ?>">
				</div>
			</td>
			<td style="border:transparent">
				<div style="word-wrap: break-word" class="py-2 pl-2">
					<span><h3><?php echo $good['name'] ?></h3></span>
				</div>
			</td>

			<td style="border: transparent">
				<div style="word-wrap: break-word" class="py-2 pl-2">
					<span><?php echo $good['category_name'] ?></span>
				</div>
			</td>

			<td style="border: transparent">
				<div style="word-wrap: break-word" class="py-2 pl-2">
					<span><?php echo $good['date'] ?></span>
				</div>
			</td>
			<td style="border: transparent">
				<div style="word-wrap: break-word" class="py-2 pl-2">
					<button class="good" good_id = "<?php echo $good['id'] ?>"> Delete </button>
				</div>
			</td>
		</tr>
<?php endforeach; ?>
	</table>
</div>


