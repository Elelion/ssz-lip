<!-- Yandex.Metrika counter --> 
	<script type="text/javascript" > 
		(function (d, w, c) { (w[c] = w[c] || []).push(function() 
		{ 
			try { w.yaCounter47503153 = new Ya.Metrika2
			({ 
				id:47503153, clickmap:true, trackLinks:true, accurateTrackBounce:true 
			});
		} 
		catch(e) { } }); 
		var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), 
		f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; 
		s.src = "https://mc.yandex.ru/metrika/tag.js"; 
		if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } 
		else { f(); } })(document, window, "yandex_metrika_callbacks2"); 
	</script> <noscript><div><img src="https://mc.yandex.ru/watch/47503153" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113361100-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-113361100-1');
	</script>


<?php
	require_once "header.php"; 				//including general header

	require_once "main.php"; 				//including blocs for body site on sheet-1 (index.php)
	
	require_once "footer.php"; 				//including general footer
?>