<?php  echo '
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<title>MoveGreen </title>
<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="web/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
			    <script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
				</script>
<!---- start-smoth-scrolling---->
 <!-- Custom Theme files -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>

<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<!----//webfonts---->
	<!----- start-Share-instantly-slider---->
					 <!-- Prettify -->
						<link href="web/css/owl.carousel.css" rel="stylesheet">
					    <script src="web/js/owl.carousel.js"></script>
					    <script>
						    $(document).ready(function() {
						      $("#owl-demo , #owl-demo1").owlCarousel({
						        items : 1,
						        lazyLoad : true,
						        autoPlay : true,
						      });
						    });
					    </script>
					    <script>
						    $(document).ready(function() {
						      $("#owl-demo3").owlCarousel({
						        items : 4,
						        lazyLoad : true,
						        autoPlay : true,
						        navigation: false,
						        pagination: false,
						      });
						    });
					    </script>
					<!----- //End-Share-instantly-slider---->
             
				<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
<script src="web/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
</head>
<body>
    <div class="header">
     <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="web/images/logoWeb.png" class="img-responsive" alt=""/></a>
		 </div>
		             <nav class="top-nav">
						<ul class="top-nav">
							<li class="active"><a href="#home" class="scroll">Home <span> </span></a></li>
							<li class="page-scroll"><a href="#fea" class="scroll">Produtos<span> </span></a></li>
							<li class="page-scroll"><a href="#screen" class="scroll">Peças<span> </span></a></li>
							<li class="page-scroll"><a href="#about" class="scroll">Assistência Técnica <span> </span></a></li>
							<li class="page-scroll"><a href="#price" class="scroll">Onde Comprar<span> </span></a></li>
							<li class="page-scroll"><a href="#news" class="scroll">Institucional<span> </span></a></li>
							<li class="page-scroll" ><a href="#revenda" class="scroll"> Revendedor <span> </span></a>  </li>
							<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Contato </a></li>
						</ul>
						<a href="#" id="pull"><img src="web/images/nav-icon.png" title="menu" /></a>
					</nav>			
	                <div class="clearfix"></div>
	  </div>
   </div>
   <div class="slider" id="home">
  	<div class="slider_container">
  		<div class="wmuSlider example1">
			  <?php include 'php/home.php'; ?>
				</div>
                
              </div>
            	 <script src="web/js/jquery.wmuSlider.js"></script> 
				       <script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
           </div>
      </div>
      <div class="main">
      	<div class="content-top" id="fea">
      		<div class="container">
      			<h2 class="m_1">Uma linha de produtos sustentáveis</h2>
      			<p class="m_2">Para quem pensa verde.</p>
      			<!--
      			<div class="m_3"><span class="left_line"> </span><div class="border"> </div><span class="right_line"> </span></div>
      			<div class="row feature">
      				<h3 class="m_4">Feature</h3>
      				<div class="col-md-8 feature_top">
      					<h3>Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed di </h3>
      					<p>nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat null</p>
      				</div>
      				<div class="col-md-4 feature_img">
      					<img src="web/images/world.png" class="img-responsive" alt=""/>
      				</div>
      			</div>
      		</div>
      	</div>
      	<!--SCOOTER 1000W -->
      	<div class="main">
      	<div class="content-top" id="scooter100w">
      		<div class="container">
      			<h2 class="m_1">Motor Elétrico de 1000w, mais potencia para você na subida</h2>
      			<p class="m_2">Mais Alta, prepararada para as ruas brasileiras.</p>
      			      			<!--	<div class="col-md-4 feature_img">
      					<img src="web/images/world.png" class="img-responsive" alt=""/>
      				</div>

      			-->
      			 <div id="owl-demo3" class="owl-carousel owl-carousel2">
				                <div class="item">
				                	<img class="lazyOwl" data-src="web/images/verde-alta.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">MoveGreen </span><br><span class="g-title1">Scooter 800w</p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="web/images/amarela-alta.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">MoveGreen </span><br><span class="g-title1"> <span class="g-title2">For Better Wold</span></span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="web/images/scooter-verde.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">Movegreen  </span><br><span class="g-title1"> <span class="g-title2">For Better Wold</span></span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="web/images/_MG_3115.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">Movegreen  </span><br><span class="g-title1"> <span class="g-title2">For Better Wold</span></span></p>
				                </div>
				                
				                 <div class="item">
				                	<img class="lazyOwl" data-src="web/images/_MG_3265.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">Movegreen </span><br><span class="g-title1"> <span class="g-title2">For Better Wold</span></span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="web/images/_MG_3310.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">Movegreen </span><br><span class="g-title1">For Better Wold <span class="g-title2"></span></span></p>
				                </div>
				                 <div class="item">
				                	<img class="lazyOwl" data-src="web/images/scooter-verde.jpg" alt="Scooter Elétrico">
				                	<p class="img_slider"><span class="g-title">Movegreen </span><br><span class="g-title1">For Better Wold <span class="g-title2"></span></span></p>
				                	<div class="clearfix"> </div>
				                </div>
				               
				                <div class="clearfix"> </div>
			</div>

      			<div class="m_3"><span class="left_line"> </span><div class="border"> </div><span class="right_line"> </span></div>
      			<div class="row feature">
      				<h3 class="m_4">Caracteristicas</h3>
      				<div class="col-md-8 feature_top">
      					<h3>Pneu maior e mais seguro, <br>Freio a disco dianteiro e trazeiro </h3>
      					<p>Com farol dianteiro e trazeiro de Led, além de buzina, e retrovisor <br>Conforme a regulação do Detran </p>
      					<p> Silencioso.<br>
- Não Poluente.<br>
- Mínimo consumo de energia elétrica para recarregar.<br>
- Podendo usar em pé ou sentado.<br>
- Apoio para os pés.<br>
- Bateria facilmente removível para transporte.<br>
- Fácil Manuseio.<br>
- Durabilidade e conforto.<br>
 	 
Dicas e segurança:	 <br>
- Sempre utilize equipamentos de segurança e respeite as leis de trânsito.<br>
- É necessário recarregar completamente a bateria antes do uso inicial.<br>
- Por razões de segurança, não carregue a bateria por mais de 24 horas.<br>
- Carregar imediatamente a bateria após o uso.<br>
- Não permita que a bateria descarregue completamente.<br>
- Desligue o aparelho enquanto não estiver usando.<br>
- Este produto não foi projeto para terrenos off-road.<br>
- Não salte ou faça manobras arrojadas e radicais.<br>
- Evite andar com esse produto em condições molhadas, chuva, poças de água, superfícies oleosas ou não pavimentadas.<br>
- Nunca use mangueira com água para lavar, utilize um pano úmido e deve-se secar em seguida.<br>
- Nunca trafegue por rodovias ou estradas.<br>
- Idade mínima recomenda de 12 anos.<br>
- Nunca opere com mais de uma pessoa no produto.<br>
- Mantenha as mãos, rosto, pés, e cabelo longe de todas as partes móveis.<br>
- Não toque no motor ou na roda enquanto o produto estiver em movimento.<br>
- Nunca opere esse produto sob a influência de álcool ou drogas.<br>
- Nunca permita que uma criança use esse produto sem a supervisão de um adulto.<br>
- Pessoas com problema de visão, equilíbrio, coordenação, reflexo, força muscular e óssea e sem potencialidade de decisão não devem usar esse produto.<br>
- Não aproxime a bateria do fogo ou fonte de calor.<br>
- Utilize somente peças de reposição de qualidade, como recomendadas pelo fabricante.<br>
- Nunca desmonte sua bateria ou faça qualquer reparo não autorizado.<br>
- Use sempre apenas o carregador que acompanha seu produto<br>- Capacete é lei, e todos devem utilizá-lo.
 	 
*Imagens meramente ilustrativas.</p>
      				</div>
      			</div>
      		</div>
      	</div>

      	      	<!--SCOOTER 1000W -->

      	<!-----peças ----->
		<div id="screen" class="work">
			<div class="container">
				<h2 class="m_1">Temos diversas peças para você</h2>
      			<p class="m_2">Veja aqui as peças disponiveis.</p>
					<ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>
			  	  <a href="http://movegreen.com.br/pecas/scooter.html">Scooter Elétricos</a> </span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><a href="http://movegreen.com.br/pecas/bicicleta.html">Bicicletas Elétricas</a></span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><a href="http://movegreen.com.br/pecas/skate-eletrico.html">Skate <br> Elétricos</a></span></li>
			   </ul>	
			</div>

			</div>
		</div>
		<!-- Assistência técnica-->
	    <div class="about" id="about">
			<div class="container-fluid">

			<div class="row bc">
				<?php include'php/about.php' ?>	
					 		
		</div>
	</div>
</div>

			<!-- assistência técnica-->

				
		</div>
	   </div>
	   <div class="price" id="price">
	   	<div class="container">
	   			   		
	   		<div class="row">
	   			<h3 class="rev">Lojas virtuais</h3>
	   			<hr>
	   			<?php include 'php/revenda.php' ?>


	   		</div>
	   	</div>
	   </div>
	   <!-- Institucional-->
	   <div class="featurelist" id="news">
	   		<?php include 'php/new.php'; ?>
	   </div>
	   <!-- institucional -->
	   <div class="testimonial">
	   	<div class="container">
	   	  <div class="testimonial_top">
	   		<p class="m_12"> Acessórios	</p>  

	   	</div>
	   	    <ul id="flexiselDemo3">
			   <li><img src="web/images/extra.jpg" /></li>
			   <li><img src="web/images/kanui.jpg" /></li>
			   <li><img src="web/images/rakuten.jpg" /></li>
			 
			</ul>
			<script type="text/javascript">
				$(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 5,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
		 </script>
         <script type="text/javascript" src="web/js/jquery.flexisel.js"></script>
	   	 </div>
	    </div>
	   </div>
	   <div class="footer" id="contact">
	   	<div class="container">
	   		<?php include 'php/footer.php'; ?>
	   		<div class="col-md-3 footer_grid">
	   			<ul class="f_grid1">
					<li><i class="f-msg"> </i>
					<p class="pf">Newsletter</p>
					
					<div class="clearfix"> </div></li>
				</ul>
				<p class="pf2">  >Receba noticias sobre nossos produtos</p>
				
				   <form>
				     <input type="text" value="Entre com seu email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Entre com seu email';}">
				     <input type="submit" value="Enviar">
				   </form>
			    
	   		 </div>
	   		</div>
	   		<div class="footer_bottom">
		   		<div class="copy">
			        <p>Todos direito reservado a Movegreen</a></p>
			    </div>
			    <div class="social">	
				   <ul>	
					  <li class="s1"><a href="https://www.facebook.com/movegreenforabetterworld?ref_type=bookmark"><span> </span></a></li>
					  <li class="s2"><a href="#"><span> </span></a></li>
					  <li class="s3"><a href="#"><span> </span></a></li>	
					  <li class="s4"><a href="#"><span> </span></a></li>
					  <li class="s7"><a href="#"><span> </span></a></li>	
					  
					 
				   </ul>
			    </div>
		       <div class="clearfix"> </div>
		    </div>
		    <script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
		    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">top </span></a>
	   	</div>
	   </div>
</body>
</html>

';
?>