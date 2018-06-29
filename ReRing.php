<!-- Для отправки писем с сайта BLOCK-1 -->
<script type="text/javascript">
	$(document).ready(function() 
	{ 
		$("#ajaxform_ReRing_form").submit(function()
		{ // перехватываем все при событии отправки
			var form = $(this); // запишем форму, чтобы потом не было проблем с this
			var error = false; // предварительно ошибок нет
			
			form.find('input, textarea').each( function()
			{ // пробежим по каждому полю в форме
				if ($(this).val() == '') 
				{ // если находим пустое					
					//<a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('Err_form').style.display='block';document.getElementById('Err_form_fade').style.display='block';disableWheelScroll();">

					alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
					error = true; // ошибка					
				}
			});

			if (!error) 
			{ // если ошибки нет
				var data = form.serialize(); // подготавливаем данные
				$.ajax
				({ // инициализируем ajax запрос
					type: 'POST', // отправляем в POST формате, можно GET
					url: 'scripts/send_mail_ReRing.php', // путь до обработчика, у нас он лежит в той же папке
					dataType: 'json', // ответ ждем в json формате
					data: data, // данные для отправки

					beforeSend: function(data) 
					{ // событие до отправки
					  form.find('input[name="RR_Button1"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
					},

					success: function(data)
					{ // событие после удачного обращения к серверу и получения ответа
							if (data['error']) 
							{ // если обработчик вернул ошибку
								alert(data['error']); // покажем её текст
							}
							else 
							{ // если все прошло ок
								alert('Заявка отправлена, ожидайте ответа.'); // пишем что все ок
								$('#RR_Edit1').val(''); //Сбрасываем поля ввода
								$('#RR_Edit2').val('');
								$('#RR_Edit3').val('');												    												
																		     
  							document.getElementById('ReRing_form_close-btn').onclick(); //Эмитация нажатия кнопки на закрытие формы      							
							}
					},
					 
					error: function (xhr, ajaxOptions, thrownError) 
					{ // в случае неудачного завершения запроса к серверу
					  alert(xhr.status); // покажем ответ сервера
					  alert(thrownError); // и текст ошибки
					},
					complete: function(data) 
					{ // событие после любого исхода
					  form.find('input[name="RR_Button1"]').prop('disabled', false); // в любом случае включим кнопку обратно
					}          
				});
			}
			return false; // вырубаем стандартную отправку формы
		});
	});
</script>

<!-- .......................................... .......................................... -->

<!-- Вызывемая форма обратной связи -->
<div id="ReRing_form_fade"> <!-- темный фон а весь сайт, за формой обратой связи, т.е. темная форма определяет текущее положение размера экрана -->			
	<div id="ReRing_form"> <!-- форма обратной связи -->					
		<a id="ReRing_form_close-btn" title="Закрыть" href="javascript:void(0)" onclick = "document.getElementById('ReRing_form').style.display='none';document.getElementById('ReRing_form_fade').style.display='none';enableWheelScroll();"></a>

		<div id="ReRing_form_title"><p>ЗАКАЗАТЬ обратный звонок </p></div>		

		<form method="post" action="" id="ajaxform_ReRing_form"> <br />
			<div id="ReRing_form_blocks">
				<div id="ReRing_form_Edit1">
					<INPUT TYPE="text" 
						ID = "RR_Edit1"
						NAME="RR_Edit1" 
						placeholder="Ваше имя"								
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="25">
					</INPUT>
				</div>
				
				<div id="ReRing_form_Edit2">
					<INPUT TYPE="text" 
						ID = "RR_Edit2"
						NAME="RR_Edit2" 
						placeholder="Ваш телефон"								
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="11">
					</INPUT>
				</div>

				<div id="ReRing_form_Edit3">
					<INPUT TYPE="text" 
						ID = "RR_Edit3"
						NAME="RR_Edit3"
						placeholder="Ваш eMail"								
							onfocus="if(this.value==this.defaultValue)this.value='';" 
		  				onblur="if(this.value=='')this.value=this.defaultValue;"

						SIZE="40"
						MAXLENGHT="50">
					</INPUT>
				</div>											

				<div id="ReRing_form_Button1">
					<INPUT TYPE="submit"
						ID="RR_Button1" 
						NAME="RR_Button1" 
						VALUE="Заказать звонок">
					</INPUT>													
				</div>			
 
				<div id="ReRing_form_additional_text"><p> Нажимая на кнопку отправки формы, Я принимаю <span><a href = "docs/PRIVACY.docx" target="_blank">«Соглашение об обработке персональных данных»</a></span> </p></div>
			</div>
		</form>		
	</div> <!-- ReCall_form -->
</div> <!-- ReCall_form_fade -->