<!-- SCRIPT's ...................................................................................... -->

<!-- For slider in main block -->
  <script type="text/javascript">
    $(document).ready(function(){ 
      $('.Main_Slider_bxSlider_2').bxSlider({
        mode: 'fade',         /*оявление а не перелистывание*/  
        randomStart: true,   /*картинки будут стартовать в случайной последовательности*/                              
        speed: 1500,          /*скорость прокрутки, по умолчанию 500*/                
        autoControls: false,  /*Дает две кнопки для пролистывания SOPT и PAUSED*/                                             
        /*slideWidth: 424,    /*ширина для каждого слайда, ширина блока задется в : #Software_Monitor_slider -> width*/
        minSlides: 1,         /*минимальное количество блока*/            
        maxSlides: 1,         /*максимальное количество блоков*/            
        slideMargin: 1,       /*отступы между слайдами*/            
        touchEnabled: true,  /*Если true, слайдер позволит сенсорные переходы по слайдам*/             
        infiniteLoop: true,   /*при нажадии Далее, на посл. слайде перейдет к 1му слайду и наоборот*/           
        pause: 5500,          /*кол-во МС между автоматическим переходом (умолчание; 4000)*/            
        pager: true,         /*убирает кнопки прокрутки*/  
        autoDelay: 500,       /*Время в МС до старта слайд-шоу, по умолчанию: 0 */            
        moveSlides: 0,        /*Кол-во слайдов, что бы перейти на переходный период. Значение должно быть >= minSlides
                                и >= maxSlides. Если он = 0 (по умолчанию), то будет использовано число полностью
                                видимых слайдов*/                           
        /*startSlide: 3,        /*слайд с которого будет стартовать слайд-шоу (нумерация с 0ля)*/                         
        auto: true            /*автоматическое пролистывание слайда*/
      }); 
    });
  </script>   
<!-- SCRIPT's ...................................................................................... -->

<div id="main_Block_3_slider"> <!-- slider on main sheet -->
    <ul class="Main_Slider_bxSlider_2">      
        <li>
            <img src="images/Main_slider_2_1.png" title="Надежное получение материнского капитала" alt="С «Союзсберзайм» надежно"/>

            <div id="Main_Slider_bxSlider_2_block_1_pos">                
                <div id="Main_Slider_bxSlider_2_block_1">
                    <div id="Main_Slider_bxSlider_2_block_1_title">
                        <p>Надежно</p>
                    </div>

                    <div id="Main_Slider_bxSlider_2_block_1_text">
                        <p>
                            Мы работаем уже более 10 лет по ФЗ от 29.12.2006 №256</br>
                            и нами уже было выдано более 1.000 займов,</br>
                            на общую сумму более 200 млн. рублей.
                        </p>
                    </div>
                </div>
            </div>
        </li>
<!-- ... -->         
        <li>
            <img src="images/Main_slider_2_2.png" title="Простое получение материнского капитала" alt="С «Союзсберзайм» просто"/>

            <div id="Main_Slider_bxSlider_2_block_2_pos">                
                <div id="Main_Slider_bxSlider_2_block_2">
                    <div id="Main_Slider_bxSlider_2_block_2_title">
                        <p>Просто</p>
                    </div>

                    <div id="Main_Slider_bxSlider_2_block_2_text">
                        <p>
                            Мы всегда ценим Ваше время, нервы и деньги, поэтому     </br>
                            подбираем индивидуальный подход к каждому человеку.     </br></br>
                            Сделав первый шаг - <a href="tel:84742221626"><strong>позвоним</strong></a> нам, или оставив 
                            
                            <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
                                <strong>заявку</strong>
                            </a></br>

                            через форму обратной связи на сайте, мы сами свяжемся с </br>
                            вами и поможем разрешить все интересующий Вас вопросы.
                        </p>
                    </div>
                </div>
            </div>
        </li>
<!-- ... -->         
        <li>
            <img src="images/Main_slider_2_3.png" title="Быстрое получение материнского капитала" alt="С «Союзсберзайм» быстро"/>

            <div id="Main_Slider_bxSlider_2_block_3_pos">                
                <div id="Main_Slider_bxSlider_2_block_3">
                    <div id="Main_Slider_bxSlider_2_block_3_title">
                        <p>Быстро</p>
                    </div>

                    <div id="Main_Slider_bxSlider_2_block_2_text">
                        <p>
                            После подачи всех требуемых документов в </br>
                            срок рассмотрения заявки составит всего 24 часа.         </br></br>
                            Даже если поданные Вами документы будут не правильно     </br>
                            оформлены, то на все поправки и рассмотрение заявки уйдет</br>
                            не более 5ти дней.
                        </p>
                    </div>
                </div>
            </div>
        </li>        
    </ul>
</div>