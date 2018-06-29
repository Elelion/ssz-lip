<!-- SCRIPT's ...................................................................................... -->

<!-- For slider in main block -->
  <script type="text/javascript">
    $(document).ready(function(){ 
      $('.Main_Slider_bxSlider_1').bxSlider({
        randomStart: false,   /*картинки будут стартовать в случайной последовательности*/                              
        speed: 1300,          /*скорость прокрутки, по умолчанию 500*/                
        autoControls: false,  /*Дает две кнопки для пролистывания SOPT и PAUSED*/                                             
        /*slideWidth: 424,    /*ширина для каждого слайда, ширина блока задется в : #Software_Monitor_slider -> width*/
        minSlides: 1,         /*минимальное количество блока*/            
        maxSlides: 1,         /*максимальное количество блоков*/            
        slideMargin: 1,       /*отступы между слайдами*/            
        touchEnabled: true,  /*Если true, слайдер позволит сенсорные переходы по слайдам*/             
        infiniteLoop: true,   /*при нажадии Далее, на посл. слайде перейдет к 1му слайду и наоборот*/           
        pause: 4700,          /*кол-во МС между автоматическим переходом (умолчание; 4000)*/            
        pager: true,         /*убирает кнопки прокрутки*/  
        autoDelay: 500,       /*Время в МС до старта слайд-шоу, по умолчанию: 0 */            
        moveSlides: 0,        /*Кол-во слайдов, что бы перейти на переходный период. Значение должно быть >= minSlides
                                и >= maxSlides. Если он = 0 (по умолчанию), то будет использовано число полностью
                                видимых слайдов*/                           
        startSlide: 0,        /*слайд с которого будет стартовать слайд-шоу (нумерация с 0ля)*/                         
        auto: true            /*автоматическое пролистывание слайда*/
      }); 
    });
  </script>   
<!-- SCRIPT's ...................................................................................... -->

    <div id="main_Block_1_slider"> <!-- slider on main sheet -->
        <ul class="Main_Slider_bxSlider_1">   
            <li>
                <img src="images/Main_slider_1_1.jpg" title="Надежное получение материнского капитала" alt="С «Союзсберзайм-Липецк» надежно"/>
                
                <div id="Main_Slider_bxSlider_1_text_1_pos">
                    <div id="Main_Slider_bxSlider_1_text_1_fon"></div>
                    <div id="Main_Slider_bxSlider_1_text_1">
                        <h1>Материнский капитал с низкой процентной ставкой, не дожидаясь 3-х лет</h1>
                    </div>                

                    <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
                        <div id="ReCallBack_Button1_Slider_1">
                            <INPUT TYPE="submit"
                                ID="RCB_Button1" 
                                NAME="RCB_Button1" 
                                VALUE="Узнать подробней">
                            </INPUT>                                                    
                        </div>          
                    </a>
                </div>
            </li>
<!-- ... -->        
            <li>
                <img src="images/Main_slider_1_2.jpg" title="Услуги для силовых ведомств и пенсионеров" alt="Кредитный потребительский кооператив правоохранительных органов"/>
                
                <div id="Main_Slider_bxSlider_1_text_2_pos">
                    <div id="Main_Slider_bxSlider_1_text_2_fon"></div>
                    <div id="Main_Slider_bxSlider_1_text_2">
                        <h2>Предоставляем сотрудникам и пенсионерам силовых ведомств, а так же физ. лицам услуги по сохранению и приумножению накопленных денежных средств</h2>
                    </div>    

                    <a class="show-btn" href = "javascript:void(0)" onclick = "document.getElementById('ReCall_form').style.display='block';document.getElementById('ReCall_form_fade').style.display='block';disableWheelScroll();">
                        <div id="ReCallBack_Button2_Slider_1">
                            <INPUT TYPE="submit"
                                ID="RCB_Button1" 
                                NAME="RCB_Button1" 
                                VALUE="Узнать подробней">
                            </INPUT>                                                    
                        </div>          
                    </a>
                </div>
            </li>
        </ul>
    </div>