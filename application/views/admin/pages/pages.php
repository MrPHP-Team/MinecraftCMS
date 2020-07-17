        	    <!-- New page box (hidden default)-->
                  <div id="NewPageBox">
        		<form action="" method="get">
        		<h5>Новая страница  <a onclick="NoNewPage(); return false;" href="#">[X]</a></h5>
        		<hr>
				<input type="text" name="page" placeholder="Page name">
				<input type="submit" name="action" value="Create">
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
        	<input name="action" type="submit" value="Посетить" class="button inline">
        </form>
        <div id="desc">
        	<p>Здесь вы можете редактировать и удалять существующие страницы. Чтобы посетить страницу, нажмите «Посетить!». Или вы можете создать ...</p>
        </div>
        <a href="#" onclick="NewPage(); return false;" class="button">Новая страница</a>
          </div>
