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
			<p>Поздравляем с Днем защитника отечества!</p>
		</div>
		<div id="news_articles_block_time"><p>09:58</p></div>
		<div id="news_articles_block_date"><p>17.02.2018</p></div>

		<div id="news_articles_pic">
			<div id="news_articles_pic"><img src="images/news_7.jpg" title="С 23 февраля!" alt="С Днем защитника отечества!"/></div>
		</div>

		<div id="news_articles_block_text">
			<p>
				Кредитный потребительский кооператив "Союзсберзайм-Липецк" поздравляет всех своих пайщиков с Днем защитника отечества.<br/>
				Желаем счастья, здоровья и успехов.
			</p>
		</div>
	</div>		
</div>

<!-- ........................................................................... -->

<?php
	require_once "footer.php"; 				//including general footer
?>