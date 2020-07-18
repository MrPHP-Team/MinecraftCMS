        	    <!-- New page box (hidden default)-->
        	<div id="NewPageBox">
        		<form action="" method="get">
        		<h5>Новая страница  <a onclick="NoNewPage(); return false;" href="#">[X]</a></h5>
        		<hr>
				<input type="text" name="page" placeholder="Название">
				<input type="submit" name="action" value="Создать">
				</form>
			</div>
			<!-- Annat -->
        <div id="content">
        	<form action="" method="GET">
        	<select name="page" class="SelectPage">
        		<?php
        			foreach($pages->result() as $page)
					{
						echo "<option name=" . $page->name . "\">" . $page->name . "</option>";
					}
        		?>
        	</select><br>
        	<input name="action" type="submit" value="Изменить" class="button inline">
        	<input name="action" type="submit" value="Удалить" class="button inline">
        	<input name="action" type="submit" value="Go" class="button inline">
		</form><br />
        <hr><br />
        <a href="#" onclick="NewPage(); return false;" class="button">Новая страницаё</a>
	    </div>
