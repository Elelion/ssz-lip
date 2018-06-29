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
			<p>С наступающим Новым годом и Рождеством!</p>
		</div>
		<div id="news_articles_block_time"><p>16:27</p></div>
		<div id="news_articles_block_date"><p>29.12.2017</p></div>

		<div id="news_articles_pic"><img src="images/news_3.jpg" title="Страхование личного имущества" alt="Страхование личного имущества пайщиков"/></div>

		<div id="news_articles_block_text">
			<p>
				Уважаемые коллеги, друзья! От всей души поздравляем Вас с наступающим Новым годом и Рождеством Христовым!
			</p>
		</div>
	</div>		
</div>

<!-- ........................................................................... -->

<?php
	require_once "footer.php"; 				//including general footer
?>