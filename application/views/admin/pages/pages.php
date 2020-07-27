        	    <!-- New page box (hidden default)-->
        	<div id="NewBox">
        		<form action="" method="get">
				<h5>Новая страница  <a onclick="NoNewBox(); return false;" href="#">[X]</a></h5>
				<hr>
					<input type="text" required name="page" placeholder="Название страницы"><br>
					<input type="submit" name="action" value="Создать">
			</form>
		</div>

			<!-- Annat -->
		<section>
                <h2>Страницы</h2>
                <hr>
		    <form action="" method="GET">
			<select name="page" class="SelectPage" style="min-width: 250px;">
				<?php
					foreach($pages->result() as $page)
						{
							echo "<option name=" . $page->name . "\">" . $page->name . "</option>";
						}
				?>
			</select>
			<input name="action" type="submit" value="Изменить" class="button inline">
			<input name="action" type="submit" value="Удалить" class="button inline">
			<input name="action" type="submit" value="Go" class="button inline">
			<blockquote>
				<p>Здесь вы можете редактировать и удалять существующие страницы. Чтобы посетить страницу, нажмите «Go!». Для создания новой страницы нажмите «Новая страница»</p>
			</blockquote>
        		</form>
        <a href="#" onclick="NewBox(); return false;"><button>New page</button></a>
</section>
