<div id="NewWidgetBox">
	<h3>Новый виджет</h3>
	<form action="" method="POST">
		<textarea name="content" cols="75" rows="5"></textarea>
		<input name="title" type="text" placeholder="Заглавие">
		<input type="submit" style="width: 100px; height: 24px;" value="Сохранить">
		<input type="button" onclick="NoNewWidget(); return false;" style="width: 100px; height: 24px;" value="Отменить">
	</form>
</div>
<div id="content">
	<h3>Текущие виджеты (<?=$widgets->num_rows()?>)</h3>
	<?php
	foreach($widgets->result() as $widget){
		echo '<div class="widget">';
		echo '<h4>'. $widget->title .'<a href="?action=delete&widget='. $widget->id .'"><img class="remove" src="'.base_url().'images/admin/remove.png"></a><a href="' . base_url() . 'admin/EditWidget/'. $widget->id .'"><img class="remove" src="'.base_url().'images/admin/edit.png"></a></h4>';
		echo '<p>'. $widget->content .'</p>';
		echo '</div>';
	}
	?>

	<br>
		<a class="button" onclick="NewWidget(); return false;" href="#">Новый виджет</a>
</div>
