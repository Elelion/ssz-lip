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
			<p>Страхование личного имущества пайщиков кооператива</p>
		</div>
		<div id="news_articles_block_time"><p>14:07</p></div>
		<div id="news_articles_block_date"><p>16.11.2017</p></div>

		<div id="news_articles_pic"><img src="images/news_1.jpg" title="Страхование личного имущества" alt="Страхование личного имущества пайщиков"/></div>

		<div id="news_articles_block_text">
			<p>
				КПК «Союзсберзайм-Липецк» наряду со страхованием вкладов и займов с 1 февраля т.г. приступает к страхованию личного имущества пайщиков кооператива.
			</p>
		</div>
	</div>		
</div>

<!-- ........................................................................... -->

<?php
	require_once "footer.php"; 				//including general footer
?>