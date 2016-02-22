<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <!-- <svg version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="841.89px"
	 height="595.28px" viewBox="0 0 841.89 595.28" enable-background="new 0 0 841.89 595.28" xml:space="preserve">
	<switch> -->
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="contain">
			<div class="header--logo">
				<h3><span class="logo-red">Oil</span>Studio</h3>	
				<small>100% натуральные масла премиум-класса<br />с доставкой по всей России</small>		
				<img src="<?php bloginfo('template_directory'); ?>/img/logo-1.png" alt="" class="header--logo--img" />
			</div>
			<div class="header--numb">
				<h4><?php echo get_theme_mod('phone_textbox'); ?></h4>
				<!-- open .header--numb--soc -->
				<div class="header--numb--soc">
					<a href="http://vk.com/oilbox_russia"><i class="fa fa-vk"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<!-- close .header--numb--soc -->
				
			</div>
			<div class="header--callbut">
				<a href="#" data-toggle="modal" data-target="#order_call">заказать звонок</a>
				
			</div>
		</div>		
	</header>

	<section class="title">
		<div class="contain">
			<h2><span class="grey">OilBox - идеальный подарок на 8 марта</span></h2>
			<h2><span class="white c-red">Новинка 2016 года!</span></h2>
			<div class="title__form">
				<div class="title__form--head">
					<p>Оставьте заявку прямо сейчас <br />
					и получите приятный сюрприз от <br />
					команды "OilStudio" в подарок!</p>
				</div>
				<input type="text" class="title__form--input" name="header-feedback-name" placeholder="Имя">
				<input type="email" class="title__form--input" name="header-feedback-mail"placeholder="E-mail">
				<input type="phone" class="title__form--input" name="header-feedback-phone" placeholder="Телефон">
				<!-- open .title__form--lock -->
				<div class="title__form--lock">
					<img src="<?php bloginfo('template_directory'); ?>/img/closed-lock.png" alt="" />
					<p>Компания обязуется использовать персональные данные 
						клиента в соответствии с требованиями Федерального 
						закона от 27.07.2006 г. № 152-ФЗ "О персональных данных"</p>
				</div>
				<!-- close .title__form--lock -->
				<input type="submit" class="title__form--sub send_feedback" value="Заказать">
			</div>
			<div class="title--boxesimg">
				<img src="<?php bloginfo('template_directory'); ?>/img/boxes.png" alt="">
			</div>
		</div>
		<div class="title--whiteline"></div>
	</section>

	<section class="infographics">
		<h1 class="block_title black">OilBox - это... <img src="<?php bloginfo('template_directory'); ?>/img/1-1.png" alt="" /></h1>
		<div class="contain">
			<div class="infographics__box">
				<div class="infographics__item-1">
					<img src="<?php bloginfo('template_directory'); ?>/img/SheaButter-thumbnail.png" alt="">
					<h4>Масло ШИ</h4>
					<p>Производитель Буркина-Фасо</p>				
				</div>
				<div class="infographics__item-2">
					<img src="<?php bloginfo('template_directory'); ?>/img/coconut_oil_main-1000x600.png" alt="">
					<h4>Кокосовое масло</h4>
					<p>Производитель Филиппины</p>
				</div>
				<div class="infographics__item-center">
					<div class="arrow-left-top">
						<img src="<?php bloginfo('template_directory'); ?>/img/arr-top-l.png" alt="">
					</div>
					<div class="arrow-right-top">
						<img src="<?php bloginfo('template_directory'); ?>/img/arr-top-r.png" alt="">
					</div>
					<div class="arrow-left-bot">
						<img src="<?php bloginfo('template_directory'); ?>/img/arr-bot-l.png" alt="">
					</div>
					<div class="arrow-right-bot">
						<img src="<?php bloginfo('template_directory'); ?>/img/arr-bot-r.png" alt="">
					</div>
				</div>
				<div class="infographics__item-3">
					<img src="<?php bloginfo('template_directory'); ?>/img/left-bot-block-1.png" alt="">
					<h4>Масло Какао</h4>
					<p>Производитель Колумбия</p>
				</div>
				<div class="infographics__item-4">				
					<img src="<?php bloginfo('template_directory'); ?>/img/0.png" alt="">
					<h4>Аргановое масло</h4>
					<p>Производитель Марокко</p>				
				</div>				
			</div>
		</div>
	</section>

	<section class="boxes">
		<h1 class="block_title black">Наши OilBox</h1>
		<div class="contain">
			
			<div class="boxes__item">
				<!-- open .boxes__item--title boxes__item--1 -->
				<div class="boxes__item--title boxes__item--1">
					<h3>Мини-бокс</h3>
				</div>
				<!-- close .boxes__item--title boxes__item--1 -->
				<div class="boxes__item--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/box.png" alt="">
				</div>
				<div class="boxes__item--desc">
					<p>1) Масло ШИ, pучной отжим,
					100 гр. (Буркина-Фасо)</p>
					<p>2) Кокосовое масло первого 
					холодного отжима,100 гр. 
					(Филиппины)	</p>				
					<!-- open .boxes__item--price -->
						<div class="boxes__item--price">
							<h4>цена <span>990</span>руб</h4>
						<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
						</div>
						<!-- close .boxes__item--price -->	
						
				</div>
				<!-- <div class="boxes__item--desc--more">
					<a href="#" data-toggle="modal" data-target="#modal--black">Подробнее</a>
				</div>
				Modal
				<div class="modal fade" id="modal--black" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-body">
								<h3>OzoneBox №1 "Полное Восстановление волос"</h3>
								<ol>
									<li>
										Маска для восстановления структуры волос. Мега-
										питательная маска, которая глубоко проникает в структуру 
										волоса, питает, восстанавливает и лечит волос изнутри. 
										Заполняет поврежденные участки волос и препятствует их 
										сечению и ломкости. 
									</li>
									<li>
										Маска для роста и против выпадения волос.Улучшает 
										кровоснабжение кожи головы, укрепляет корни, пробуждает 
										спящие волосяные фолликулы, активирует рост и сокращает 
										выпадение, а также увлажняет и питает кожу головы. Красивые 
										и Здоровые волосы всего за 3-4 недели.
									</li>
								</ol>
							</div>
							
						</div>
					</div>
				</div> -->
			</div>
			<div class="boxes__item">
				<!-- open .boxes__item--title boxes__item--1 -->
				<div class="boxes__item--title boxes__item--2">
					<h3>Стандарт-бокс</h3>
				</div>
				<!-- close .boxes__item--title boxes__item--1 -->
				<div class="boxes__item--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/box.png" alt="">
				</div>
				
				<div class="boxes__item--desc">
						<p>1) Масло ШИ, pучной отжим,
						100 гр. (Буркина-Фасо) </p>
						<p>2) Кокосовое масло первого 
						холодного отжима, 100 гр. 
						(Филиппины) </p>
						<p>3) Масло какао первого 
						холодного отжима 100 гр. 
						(Колумбия)</p>
						
						<!-- open .boxes__item--price -->
						<div class="boxes__item--price">
							<h4>цена <span>1490</span>руб</h4>
							<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
						</div>
						<!-- close .boxes__item--price -->
						
				</div>
				<!-- <div class="boxes__item--desc--more">
					<a href="#" data-toggle="modal" data-target="#modal--white">Подробнее</a>
				</div>
				Modal
				<div class="modal fade" id="modal--white" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-body">
								<h3>OzoneBox №2 "Безупречно чистая кожа"</h3>
								<p></p>
								<p></p>
								<p>Благодаря уникальному составу нашей косметики, в основе 
								которой находятся озониды ( активные формы кислорода), 
								комплекс работает на клеточном уровне и действует немедленно 
								после нанесения!</p>
								<p>Он волшебным образом воздействует на кожу, обеспечивая 
								тройной эффект против локальных проблем кожи: </p>
								<ol>
									<li>помогает избавиться от прыщей, воспалений,акне и угрей;</li>
									<li>способствует восстановлению поврежденных участков кожи;</li>
									<li>разглаживает морщинки и складки.</li>
								</ol>
							</div>
							
						</div>
					</div>
				</div> -->
			</div>
			<div class="boxes__item">
				<!-- open .boxes__item--title boxes__item--1 -->
				<div class="boxes__item--title boxes__item--3">
					<h3>Мега-бокс</h3>
				</div>
				<!-- close .boxes__item--title boxes__item--1 -->
				<div class="boxes__item--img">
					<img src="<?php bloginfo('template_directory'); ?>/img/box.png" alt="">
				</div>
				<div class="boxes__item--desc">
					<p>1) Масло ШИ, pучной отжим,
					100 гр. (Буркина-Фасо) </p>
					<p>2) Кокосовое масло первого 
					холодного отжима, 100 гр. 
					(Филиппины) </p>
					<p>3) Масло какао первого 
					холодного отжима 100 гр.
					(Колумбия) </p>
					<p>4) Аргановое масло первого 
					холодного отжима, 30 мл 
					(Марокко)</p>

					<!-- open .boxes__item--price -->
					<div class="boxes__item--price">
						<h4>цена <span>1990</span>руб</h4>
						<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
					</div>
					<!-- close .boxes__item--price -->
						
				</div>
				<!-- <div class="boxes__item--desc--more">
					<a href="#" data-toggle="modal" data-target="#modal--red">Подробнее</a>
				</div>
				Modal
				<div class="modal fade" id="modal--red" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							
							<div class="modal-body">
								<h3>OzoneBox №3 "Идеальное тело"</h3>
								<p>Комплекс разработан для лечения целлюлита. В  его 
									основе лежат Озониды( активные формы кислорода), 
									которые работают на клеточном уровне, взаимодействуют 
									с жировыми клетками и разрушают их скопления, 
									вызывающие формирование целлюлита.</p>
								<ol>
									<li>
										Улучшение микроциркуляции крови
									</li>
									<li>
										Улучшение кислородного обмена, как на поверхности кожи, так и в подкожных тканях
									</li>
									<li>
										Расщепление жиров
									</li>
									<li>
										Усиление лимфодренажа и выделение жидкости из тканей
									</li>
								</ol>
							</div>
							
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>


	<!-- open .oils -->
	<section class="oils">
		<!-- open .blocktitle black -->
		<h1 class="block_title black">Масла от OilStudio</h1>
		<!-- close .blocktitle black -->
		<!-- open .contain -->
		<div class="contain">
			<!-- open .oils__box -->
			<div class="oils__box">
				<!-- open .oils__item -->
				<div class="oils__item">
					<!-- open .oils__item--img -->
					<div class="oils__item--img">
						<!-- open .oils__item--img--price -->
						<div class="oils__item--img--price">1290р</div>
						<img src="<?php bloginfo('template_directory'); ?>/img/1(2).png" alt="" />
						<!-- close .oils__item--img--price -->
					</div>
					<!-- close .oils__item--img -->
					<!-- open .oils__item--title -->
					<div class="oils__item--title">
						<h3>Кокосовое масло премиум-класса (PREMIUM COCONUT OIL)</h3>
						<h4>100% натуральное органическое кокосовое 
						масло, первый холодный отжим.
						Производитель Филиппины<br />
						200 гр</h4>
						<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
					</div>
					<!-- close .oils__item--title -->
					<!-- open .oils__item--desc -->
					<div class="oils__item--desc">
							<p><b>Кокосовое масло с прекрасным ароматом можно использовать 
							для ухода за лицом и волосами: </b></p>
							<p>- оно обеспечивает увлажнение и питание кожи всего тела; </p>
							<p>- идеально подходит для массажа; </p>
							<p>- устраняет растяжки во время беременности, защищает 
  							кожу от UF; </p>
							<p>- увлажняет кожу после загара; </p>
							<p>- препятствует возникновению морщин; </p>
							<p>- эффективно при сухости и шелушении кожи, трещинах, ожогах; </p>
							<p>- смягчает и увлажняет волосы; </p>
							<p>- устраняет ломкость и сухость волос; </p>
							<p>- придает волосам блеск и упругость; </p>
							<p>- защищает волосы от вредного воздействия окружающей среды.</p>
						
					</div>
					<!-- close .oils__item--desc -->
				</div>
				<!-- close .oils__item -->

				<!-- open .oils__item -->
				<div class="oils__item">
					<!-- open .oils__item--img -->
					<div class="oils__item--img">
						<!-- open .oils__item--img--price -->
						<div class="oils__item--img--price">1790р</div>
						<img src="<?php bloginfo('template_directory'); ?>/img/1(3).png" alt="" />
						<!-- close .oils__item--img--price -->
					</div>
					<!-- close .oils__item--img -->
					<!-- open .oils__item--title -->
					<div class="oils__item--title">
						<h3>Аргановое масло премиум-класса
						(ARGAN GOLD OIL OF MOROCCO)
						</h3>
						<h4>100% натуральное органическое аргановое 
						масло Arganature, первый холодный отжим.
						Производитель Филиппины<br />
						100 мл</h4>
						<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
					</div>
					<!-- close .oils__item--title -->
					<!-- open .oils__item--desc -->
					<div class="oils__item--desc">
						<p><b>Масло Арганы идеально подходит для разных типов кожи: сухой, 
						поврежденной, чувствительной, а также для всех типов волос:</b></p>
						<p>- смягчает, питает, освежает и увлажняет кожу, предохраняя ее от 
						  высыхания и шелушения; </p>
						<p>- восстанавливает липидный баланс кожи, усиливает барьерные
						  функции кожи;  </p>
						<p>- повышает упругость и эластичность кожи, выравнивает ее рельеф, 
						   способствует разглаживанию мелких морщин; </p>
						<p>- ускоряет процесс естественной регенерации кожи, активизирует 
						   процессы эпителизации и грануляции поврежденной кожи; </p>
						<p>- успокаивает кожу, защищает ее от раздражения и воспаления; </p>
						<p>- защищает кожу от воздействия солнечного ультрафиолета, 
						   препятствует преждевременному старению кожи и раннему 
						   появлению возрастных морщин и пигментных пятен; </p>
						<p>- стимулирует рост волос; </p>
						<p>- борется с выпадением волос (укрепляет волосяные луковицы); </p>
						<p>- возвращает красоту и здоровье волос.</p>
						
					</div>
					<!-- close .oils__item--desc -->
				</div>
				<!-- close .oils__item -->

				<!-- open .oils__item -->
				<div class="oils__item">
					<!-- open .oils__item--img -->
					<div class="oils__item--img">
						<!-- open .oils__item--img--price -->
						<div class="oils__item--img--price">990р</div>
						<img src="<?php bloginfo('template_directory'); ?>/img/3(2).png" alt="" />
						<!-- close .oils__item--img--price -->
					</div>
					<!-- close .oils__item--img -->
					<!-- open .oils__item--title -->
					<div class="oils__item--title">
						<h3>Масло ШИ премиум-класса
						(SHEA GOLD)

						</h3>
						<h4>100% натуральное органическое масло ШИ, 
						ручной отжим. 
						Производитель Буркина-Фасо<br />
						200 гр</h4>
						<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
					</div>
					<!-- close .oils__item--title -->
					<!-- open .oils__item--desc -->
					<div class="oils__item--desc">
						<p><b>Масло Ши - самое питательное масло, идеально подходит как 
						для кожи, так и для волос:</b></p>
						<p>- способствует заживлению и восстановлению кожи; <p>
						<p>- оказывает глубокое питательное действие; <p>
						<p>- устраняет сухость и шелушения кожи лица; <p>
						<p>- смягчает загрубевшую кожу рук, залечивает трещины на губах, 
						  пятках; <p>
						<p>- увлажняет и омолаживает увядающую и сухую кожу; <p>
						<p>- успокаивает чувствительную кожу после укусов насекомых, 
						  раздражения, или после бритья; <p>
						<p>- демонстрирует выраженный антисептический и противо-
						  воспалительный эффект; <p>
						<p>- активизирует клеточное дыхание; <p>
						<p>- лечит дерматиты кожи; <p>
						<p>- восстанавливает и поддерживает водно-липидный баланс 
						  волоса после окрашивания, завивки; <p>
						<p>- оберегает волосы от воздействия фена, утюжка, плойки; <p>
						<p>- дарит волосам шелковистую мягкость; <p>
						<p>- "лечит" секущиеся кончики; <p>
						<p>- укрепляет волос, делает его эластичней.<p>					
						
					</div>
					<!-- close .oils__item--desc -->
				</div>
				<!-- close .oils__item -->

				<!-- open .oils__item -->
				<div class="oils__item">
					<!-- open .oils__item--img -->
					<div class="oils__item--img">
						<!-- open .oils__item--img--price -->
						<div class="oils__item--img--price">1190р</div>
						<img src="<?php bloginfo('template_directory'); ?>/img/2(2).png" alt="" />
						<!-- close .oils__item--img--price -->
					</div>
					<!-- close .oils__item--img -->
					<!-- open .oils__item--title -->
					<div class="oils__item--title">
						<h3>Масло Какао Премиум-класса
							(ORGNAIC CACAO PREMIUM)</h3>
						<h4>100% какао масло холодного отжима из 
						органических какао бобов. 
						Производитель Колумбия<br />
						200 гр</h4>
						<a href="#" class="boxes__item--desc--but" data-toggle="modal" data-target="#order_call">Заказать</a>
					</div>
					<!-- close .oils__item--title -->
					<!-- open .oils__item--desc -->
					<div class="oils__item--desc">
						<p><b>Масло какао содержит в себе огромное количество полезных 
						жирных кислот, витаминов, минералов и благодаря такому 
						богатому составу оказывает на кожу следующие действия:</b></p>
						<p>- способствует исчезновению косметических дефектов (морщинки, 
						  гусиные лапки, последствия угревой сыпи, фурункулеза, 
						  небольших шрамов); <p>
						<p>- предотвращает появление морщинок;<p>
						<p>- увлажняет и питает кожу; <p>
						<p>- рекомендуется использовать во время и после беременности для 
						  предотвращения растяжек; <p>
						<p>- имеет заживляющее и тонизирующее действие; <p>
						<p>- предохраняет кожу от обветривания и обморожения; <p>
						<p>- подтягивает кожу и придает ей упругость;<p>
						<p>- замедляет процесс старения кожи.<p>									
						
					</div>
					<!-- close .oils__item--desc -->
				</div>
				<!-- close .oils__item -->
			</div>
			<!-- close .oils__box -->
		</div>
		<!-- close .contain -->
	</section>
	<!-- close .oils -->
	

	<section class="reviews">
		<h1 class="block_title black">Insta-отзывы наших клиентов</h1>
		<div class="contain">
			<div class="reviews__box">
				<div class="reviews__item">
					<div class="reviews__item--img">
						<img src="<?php bloginfo('template_directory'); ?>/img/1.png" alt="">
					</div>
					<h2>@tatyanarepina </h2>
					<p>Это просто волшебный аромат масел, 
а кокосовое прям так и хочется 
попробовать, а в действии они просто 
великолепны!!! @oilbox_russia рада, 
что вас нашла!!!

					</p>
				</div>
				<div class="reviews__item">
					<div class="reviews__item--img">
						<img src="<?php bloginfo('template_directory'); ?>/img/6.png" alt="">
					</div>
					<h2>@viktoriya_suvorova </h2>
					<p>Видимо в этом году я была хорошей 
девочкой, мой Дедушка Мороз уже 
начал приносить подарки!))) Спасибо 
большое @oilbox_russia за великолепный 
бокс с натуральными маслами для 
ухода, запах просто шикарный, а 
эффект превзошел все ожидания! 
Теперь я ваша на веки) 
</p>
				</div>
				<div class="reviews__item">
					<div class="reviews__item--img">
						<img src="<?php bloginfo('template_directory'); ?>/img/3.png" alt="">
					</div>
					<h2>@mari.chistova </h2>
					<p>
						Цветы и наборы от @oilbox_russia с 
самыми вкусными, ароматными, 
полезными и самыми натуральными 
маслами - чудесные подарки и залог 
хорошего настроения!;)) Кокосовое и 
какао - фавориты сладкоежек, аргановое 
масло станет самым любимым у тех, 
кто для любит ухаживать за своими 
волосами, а масло Ши незаменимо для 
самых нежных девушек, заботящихся о 
том, чтобы кожа была безупречной.;)    

					</p>
				</div>
				<div class="reviews__item">
					<div class="reviews__item--img">
						<img src="<?php bloginfo('template_directory'); ?>/img/5.png" alt="">
					</div>
					<h2>@sweetsweet_dream</h2>
					<p>Спасибо большое! Получила свой заказ. 
Масло просто супер-здоровское, такой 
аромат, что хочется его прямо-таки 
съесть ложками))) Я обожаю кокос, 
давно искала такое масло, оно стоит 
того, чтобы его купить. Кто еще не купил,
 советую, не пожалеете!!! Кожа после 
какао и Ши просто волшебная! А 
аргановое-идеальное масло для волос..
Шелковистые, мега-мягкие, блестящие! 
И самое главное, после арганы волосы 
быстро растут и останавливается 
выпадение..Буду косы отращивать!)))</p>
				</div>
				<div class="reviews__item">
					<div class="reviews__item--img">
						<img src="<?php bloginfo('template_directory'); ?>/img/2.png" alt="">
					</div>
					<h2>@dashabazanova</h2>
					<p>Хочу сказать большое спасибо за 
возможность приобретать масла очень 
высокого качества. Особенно кокосовое 
с Филиппин!!!)) Филиппинское кокосовое 
от @oilbox_russia лучшее, что я пробовала 
и не сравнится ни с одним другим..
Безумно приятный, нежный и вкусный 
запах) Потрясающая структура, а самое 
главное кожа и волосы ликуют от восторга 
в период холодов и пересушке от 
центрального отопления) по рекомендации 
подруги сделала обёртывание для ступней - 
ножки стали как у младенца))) в общем,
советую и рекомендую попробовать)))    
</p>
				</div>
				<div class="reviews__item">
					<div class="reviews__item--img">
						<img src="<?php bloginfo('template_directory'); ?>/img/4.jpg" alt="">
					</div>
					<h2>@gurina_na </h2>
					<p>oilbox_russia , спасибо! В очередной раз 
порадовали! Масла превосходные, 
приятная текстура, восхитительные 
ароматы.. Словами не описать, какие 
эмоции у меня вызывают ароматы этих 
масел! Я давняя поклонница натуральных 
масел..И как пользователь " со стажем", 
скажу, что самые качественные и самые
лучшие у @oilbox_russia )) натуральной 
арганы, например, и такого потрясающего 
косового Вы точно нигде не найдете!
p.s. подарки подружкам на праздник 
готовы..)))) все от @oilbox_ russia")  </p>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer black">
		<section class="want black">
		<div class="contain">
			<h4>Хочу OilBox:</h4>
			<input type="text" class="want--input" name="want-feedback-name" placeholder="Имя">
			<input type="email" class="want--input" name="want-feedback-mail" placeholder="E-mail">
			<input type="phone" class="want--input" name="want-feedback-phone" placeholder="Телефон">
			<input type="submit" class="want--sub" value="Заказать">
			<div class="want--description">
				<p>Оставьте заявку прямо сейчас 
					и получите приятный сюрприз от 
					команды "OilStudio" в подарок!</p>
			</div>
		</div>
	</section>
	</footer>


	<!-- Modal -->
	<div class="modal fade" id="order_call" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">				
				<div class="modal-body">
					
						<div class="title__form--head">
							<p>Оставьте заявку прямо сейчас <br />
					и получите приятный сюрприз от <br />
					команды "OilStudio" в подарок!</p>
						</div>
						<input type="text" class="title__form--input" name="header-feedback-name" placeholder="Имя">
						<input type="email" class="title__form--input" name="header-feedback-mail"placeholder="E-mail">
						<input type="phone" class="title__form--input" name="header-feedback-phone" placeholder="Телефон">
						<input type="submit" class="title__form--sub send_feedback_modal" value="Заказать">
					</div>	
							
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="order_sent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">

					<div class="title__form--head">
						<p>Спасибо! <br />
						Ваша заявка принята! <br />
						Скоро с вами свяжется наш менеджер 
						для уточнения заказа.</p>
					</div>
					<input type="button" class="title__form--sub" value="Закрыть" data-dismiss="modal">
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		addLoadEvent = function(func){if(typeof jQuery!="undefined")jQuery(document).ready(func);else if(typeof wpOnload!='function'){wpOnload=func;}else{var oldonload=wpOnload;wpOnload=function(){oldonload();func();}}};
		var ajaxurl = '/wp-admin/admin-ajax.php',
			pagenow = 'toplevel_page_mainpage',
			typenow = '',
			adminpage = 'toplevel_page_mainpage',
			thousandsSeparator = ' ',
			decimalPoint = ',',
			isRtl = 0;
	</script>

<?php wp_footer(); ?>
</body>
</html>