<?php
foreach($pageData->result() as $page) {
	$pageContent['source'] = $page->content;
	$pageContent['name']   = $page->name;
	$pageContent['order']  = $page->ord;
	$pageContent['status'] = $page->status;
}

switch($pageContent['status']) {
	case 1:
	     $status = '<option name="open" selected>открытый</option>\n<option name="скрытый">hidden</option>\n<option name="closed">закрытый</option>';
		break;
	case 2:
		$status = '<option name="open">открытый</option>\n<option name="hidden" selected>скрытый</option>\n<option name="closed">закрытый</option>';
		break;
	case 3:
		$status = '<option name="open">открытый</option>\n<option name="hidden">скрытый</option>\n<option name="closed" selected>закрытый</option>';
		break;
	default:
		$status = "<option>null (?)</option>";
}

?>

<section>
	<h2>Изменение страницы</h2>
	
	<?php
		if(isset($notice)) {
			echo '<div class="editor-notice">';
			echo '<p style="color: white;">' . $notice . '</p>';
			echo '</div>';
		}
	?>
	<form method="post" action"">
	<textarea style="resize: none; height: 257px; width: 415px;" name="content" wrap="off" rows="15" cols="50"><?=$pageContent['source']?></textarea>
		<div id="PageProperties">
			<h4>Настройки</h4>
			<hr><br />

			<div class="prop">
				<p>Имя</p>
				<input style="width: 150px;" name="name" required type="text" value="<?=$pageContent['name']?>">
			</div>
			<div class="prop">
				<p>Порядок</p>
				<input style="width: 150px;" name="order" required type="number" value="<?=$pageContent['order']?>">
			</div>
			<div class="prop">
				<p>Статус</p>
				</div>
			<select style="width: 150px;" name="status" style="width: 155px;">
				<?=$status?>
			</select>
	</div>
	<div class="mtop">
		<input type="submit" class="button" name="action" value="Сохранить">
		<a href="<?=base_url()?>admin"><input type="button" value="Отменить"></a>
		</form>
	</div>
</section>
