	<?php require_once "ReRing.php"; ?>

	<div id="footer"> <!-- general header -->		
		<div id="footer_pos"> 
			<div id="footer_block_1">
				<div id="footer_block_1_pos">
					<div id="footer_block_1_text">
						<p>Кредитный потребительский кооператив <a href="index.php"><strong>«СОЮЗСБЕРЗАЙМ-ЛИПЕЦК»</strong></a></p>
						<p>ИНН/КПП: 4826058989 / 482601001</p>
						<p>ОГРН:    1074823017246</p>
					</div>
				</div>
			</div>

			<div id="footer_block_2">
				<div id="footer_block_2_pos">
					<div id="footer_block_2_mail">
						<p><a href="mailto:ssz-lip@mail.ru"><strong>ssz-lip@mail.ru</strong></a></p>
					</div>
				</div>
			</div>

			<div id="footer_block_3">
				<div id="footer_block_3_pos">
					<div id="footer_block_3_phone">
						<p><a href="tel:84742221626"><strong>8 (4742) 221 626</strong></a></p>
						<p>Бесплатная консультация</p>
					</div>

					<div id="footer_block_3_callback">
						<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReRing_form').style.display='block';document.getElementById('ReRing_form_fade').style.display='block';disableWheelScroll();">
		              			<div id="ReRing_Button1_footer">							
								<INPUT TYPE="submit"
								    ID="RR_Button1" 
								    NAME="RR_Button1" 
								    VALUE="Обратный звонок">
								</INPUT>                                                    
              					</div>          
          					</a>
					</div>
				</div>
			</div>
  		</div> <!-- footer_pos -->

		<div id="footer_counter">
			<!--LiveInternet counter-->
			<script type="text/javascript">
				document.write("<a href='//www.liveinternet.ru/click' "+
				"target=_blank><img src='//counter.yadro.ru/hit?t23.6;r"+
				escape(document.referrer)+((typeof(screen)=="undefined")?"":
				";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
				screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
				";h"+escape(document.title.substring(0,150))+";"+Math.random()+
				"' alt='' title='LiveInternet: показано число посетителей за"+
				" сегодня' "+
				"border='0' width='88' height='15'><\/a>")
			</script>
			<!--/LiveInternet-->
		</div>  		
	</div>  



<!-- дополнительные скрипты... -->
<!-- Для блокировки и разблокировки скролла и стелок при прокрутке сайта -->
	<script>
		var keys = {37: 1, 38: 1, 39: 1, 40: 1}; /*Блокирукм кнопки вверх, низ, право, лево*/

		function preventDefault(e) 
		{
	  	e = e || window.event;
	  	if (e.preventDefault)
	      e.preventDefault();
	  	e.returnValue = false;  
		}

		function preventDefaultForScrollKeys(e) /*для скролла*/
		{
	    if (keys[e.keyCode]) 
	    {
	      preventDefault(e);
	      return false;
	    }
		}
	</script>

	<script>
		function disableWheelScroll() /*блокирукм все скроллы*/
		{
			if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
			  window.onwheel = preventDefault; // modern standard
			  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
			  window.ontouchmove  = preventDefault; // mobile
			  document.onkeydown  = preventDefaultForScrollKeys;
		}
	</script>

	<script>
		function enableWheelScroll() /*разблокируем все скроллы*/
			{
				if (window.removeEventListener)
			    window.removeEventListener('DOMMouseScroll', preventDefault, false);
			    window.onmousewheel = document.onmousewheel = null; 
			    window.onwheel = null; 
			    window.ontouchmove = null;  
			    document.onkeydown = null;  
			  }
	</script>	


 <!-- Скрипт для увеличения картинки по клику по ней (должен быть размещен в конце тела) -->
  <script type="text/javascript" src="JS/simplebox_util.js" async></script> <!-- УКАЗЫВАЕМ ПУТЬ К СКРИПТУ -->
  <script type="text/javascript">
  (function()
  {
      var boxes=[],els,i,l;
      if(document.querySelectorAll)
      {
          els=document.querySelectorAll('a[rel=simplebox]');  
          Box.getStyles('simplebox_css','css/simplebox.css');        /* УКАЗЫВАЕМ ПУТЬ К СТИЛЯМ */
          Box.getScripts('simplebox_js','JS/simplebox.js',function() /* УКАЗЫВАЕМ ПУТЬ К СКРИПТУ */
          { 
              simplebox.init();
              for(i=0,l=els.length;i<l;++i)
              simplebox.start(els[i]);
              simplebox.start('a[rel=simplebox_group]');          
          });
      }
  })();
  </script>               
</BODY>	