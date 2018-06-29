<?php 
	require_once "header.php"; 				//including general header	

	if(isset($_POST["news_DONE"])) //Если в статьях была нажата кнопка, то...
	{  		
		$news_NAME_var = $_POST["news_NAME"]; //Присваиваем значение переменной, для того, что бы далее сравнивать с ней значения
	}  
?>

<!-- ........................................................................... -->


<div id="news_articles">
	<div id="news_articles_pos">
		
		<div id="news_articles_title">
			<p>Новости</p>
		</div>

		<div id="news_articles_title_2">
			<p>Расширении географии деятельности</p>
		</div>
		<div id="news_articles_block_time"><p>09:56</p></div>
		<div id="news_articles_block_date"><p>09.02.2018</p></div>

		<div id="news_articles_pic">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A520a386c4bb035da1e3e1cf404ea458d7cbc2921812d1497512f782c54d3a98d&amp;width=1000&amp;height=450&amp;lang=ru_RU&amp;scroll=false;"></script>
		</div>

		<div id="news_articles_block_text">
			<p>
				Правление кооператива одобрило решение о расширении географии деятельности. Наряду с работой по агентским договорам
				в городах Воронеж, Курск, Белгород, Тамбов и Тула со следующего месяца (март 2018 года) наш Агент начинает работать в Вологде.
			</p>
		</div>
	</div>		
</div>

<!-- ........................................................................... -->

<?php
	require_once "footer.php"; 				//including general footer
?>