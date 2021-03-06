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
			<p>Развитие кредитной кооперации в России: итоги общественных консультаций</p>
		</div>
		<div id="news_articles_block_time"><p>14:34</p></div>
		<div id="news_articles_block_date"><p>16.02.2018</p></div>

		<div id="news_articles_pic">
			<div id="news_articles_pic"><img src="images/news_6.jpg" title="Итоги общественных консультаций" alt="Развитие кредитной кооперации в России"/></div>
		</div>

		<div id="news_articles_block_text">
			<p>
				Развитие кооперативов - влечет за собой фундаментальные перестройки для кредитных коопераций в фин.системе, таковыми стали заключения общественных консультаций в докладах Банка РФ «Развитие кредитной кооперации», какой был представлен членами рынка и общественности от 10.2017гг.<br/><br/>
				Итоги аналитики и общение мнений участников что принимали участие в дискуссии показал, что проф. сообщество крайне обеспокоено тенденциями и ситуацией в секторе кредитной кооперации. Население имеет очень низкий уровень финансовой грамотности, а так же не понимание основ работы кредитной кооперации с малым опытом и квалификацией членов КПК, названы среди внутренних и внешних факторов, ограничивающих рост КПК в РФ.<br/><br/>		
				Предложения для разрешения главных проблем данного рынка, были предоставлены в докладе Банка РФ и в общем были поддержаны всеми членами дискуссии. Так же были озвучены самые разные вариации и оценки для доступных путей развития КПК.<br/><br/>
				Большая часть разногласий обсуждалась в отношении определенных сфер деятельности КПК. Текущий на данный момент метод, при котором абсолютно все члены дискуссии предложили изменить, ограничив ответственность заемщиков кредитных кооперативов, или руководство КПК, либо исключительно членами КПК, которые нарушали договор и устав, где были прописаны их обязанности.<br/><br/>
				На поднятии доклада об организации управления КПК, члены обсуждения разделились на два фронта. Первые проголосовали за увеличение полномочий управления, а вторые полагали, что исполнительный орган кооператива и так уже имеет избыточные полномочия. По соображению представителей рынка КПК, ответственность возложенная на руководящий состав в большинстве случаев показала злоупотребление и бездействие, и должна регламентироваться уголовным или административным законодательством.<br/><br/>
				Постановка об ребрендинге проявило очень не однозначную реакцию в КПК. Так же по мнению некоторых членов дискуссии, смена наименования - поднимает авторитет  социально значимых институтов и кредитных кооперативов. А другая часть участников считает, что ребрендинг повлечет за собой рост финансовых пустых затрат.<br/><br/>
				Фактически все члены дискуссии сошлись единогласно в процессе конфискаций паенакоплений при падении фин.положения КПК. Большая часть респондентов выступили за ограничение прав членов кооперативов, а меньшая часть респондентов проголосовала за тотальный запрет на изъятие личных средств. Получить обратно свой пай, по их мнению, можно только после того, как утверждения фин.отчетности по окончанию ежегодного итога, со встречным обязательством пайщика, который намерен покинуть кооператив, солидарно нести обсидиарную ответственность на протяжении одного года, после его выхода.<br/><br/>
				Проф.сообщество считает, что при обсуждении доклада будут так же учтены Банком России, при выработке предложений на счет  усовершенствования законов РФ, о кредитной коопераций, а так же и при подготовке нормативных актов регулятора.
			</p>
		</div>
	</div>		
</div>

<!-- ........................................................................... -->

<?php
	require_once "footer.php"; 				//including general footer
?>