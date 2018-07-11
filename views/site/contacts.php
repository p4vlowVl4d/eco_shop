

<div class="wrapper">
    <div class="contact-pg">
        <div class="contact-pg_title">
            <h1>Контакты</h1>
        </div>
        <br>
        <hr>
        <br>
        <div class="txt">
            <p>Мы всегда готовы ответить на любой ваш вопрос и будем рады учесть ваши пожелания по работе магазина, обработке и доставки заказа!</p>
        </div>
        <div class="contact-block">

            <div class="contact-block_line">
                <div class="contact-block_line-data">
                    <div class="numbers">
                      <div class="icon_contact"><span class="icon-phone"></span></div>
                       
                       <div class="contact-tel">
                       <p>Телефон:</p>
                       <p><?=$tel?></p>

                       </div>
                        

                    </div>
                    <div class="email">
                      <div class="icon_contact"><span class="icon-envelop"></span></div>
                       <div class="contact-tel">
                           <p>Почта:</p>
                           <p><?=$adminEmail?></p>
                       </div> 
                        
                    </div>
                    <div class="time">
                        <div class="icon_contact"><span class="icon-clock"></span></div>
                        <div class="contact-tel">
                            <p>Время работы:</p>
                            <p>Пн-Пт, с 10:00 до 19:00 <br> Сб-Вс, с 10:00 до 17:00</p>
                        </div>
                    </div>
                </div>
                <div class="bg-block">
                    
                </div>

            </div>
            <div class="form-contact">
              <hr>
              <p class="form-contact-title">Обратная связь</p>
              <?php if($result):?>
              <h3 style="color: black">Ваше письмо отправлено! Мы ответим вам на указанный email </h3>
              <?php else:?>
   
              <?php if(isset($errors) && is_array($errors)):?>
              <br>
              <ul class="er_message_register">
              <?php foreach ($errors as $error):?>
              <li style="color:black"> -- <?=$error;?> </li>
              <?php endforeach;?>
                </ul>
              <?php endif;?>
              <?php endif;?>
              <form class="form-contact_form" action="#" method="post">
                <p>Ваша почта</p>
                <p><input type="email" name="userEmail" class="typical-input"></p> 
                <p>Сообщение</p>
                <p><textarea name="userText" class="typical-textarea" cols="30" rows="10"></textarea></p> 
                <p><input name="submit" class="typical-submit" type="submit"></p>
              </form>
            </div>
            <div class="maps">
                <p>Пункты самовывоза</p>
                <div class="map">
                    <!--                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17203.07140862485!2d43.85601885368086!3d56.3057562690247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4151d5f9ee033251%3A0x28d3c0cf849657aa!2z0J3QuNC20L3QuNC5INCd0L7QstCz0L7RgNC-0LQsINCd0LjQttC10LPQvtGA0L7QtNGB0LrQsNGPINC-0LHQuy4!5e0!3m2!1sru!2sru!4v1528585698856" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>


