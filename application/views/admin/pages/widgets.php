<div id="NewBox">
	<h3>Новый виджет</h3>
	<form action="" method="POST">
		<textarea name="content" cols="75" rows="5"></textarea>
		<input name="title" type="text" placeholder="Заглавие">
		<input type="submit" style="width: 100px; height: 24px;" value="Сохранить">
		<input type="button" onclick="NoNewBox(); return false;" style="width: 100px; height: 24px;" value="Отменить">
	</form>
</div>

<section>
	<h2>Виджеты</h2>
	<hr>

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
	<a onclick="NewBox(); return false;" href="#"><button>Новый Виджет</button></a>
</section>
