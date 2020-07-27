<?php
foreach($widget->result() as $wid){
	$widget_prop['title'] = $wid->title;
	$widget_prop['content'] = $wid->content;
	$widget_prop['order'] = $wid->ord;
}
?>

<section>
	<h2>Изменение виджета (<?=$widget_prop['title']?>)</h2>
	<hr>
<div id="editwidget">
	<form method="post" action="">
		<textarea cols="75" style="resize: none;" rows="10" name="content"><?=$widget_prop['content']?></textarea>
		<div class="mtop">
			<label>Заглавие: </label>
			<input name="title" required type="text" value="<?=$widget_prop['title']?>">
			<label> Порядок: </label>
			<input name="order" required  type="number" value="<?=$widget_prop['order']?>"><br><br>
			<input class="button" type="submit" value="Сохранить">
			<a href="<?=base_url()?>admin/widgets">
			<input type="button" value="Назад">
			</a>
		</div>
	</form>
	</div>
</section>
