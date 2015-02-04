<?php require("paginas/sub-paginas/header.php") ?>
	
	<div class="content">
		<div class="wrap">
			<div class="con-top">
				<div class="top-grid">
				<h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</h2>
			</div>
			<div class="content-box">
				<h2 class="title-servico">
					Serviços
				</h2>
<!-- ---------------------------------------- -->
		<ul id="flexiselDemo3">
			<li class="col span_1_of_4">
					<h3>Spa Relax</h3>
					<div class="grid-img">
						<img src="images/pic1.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					<a href="./paginas/servicos.php?cat=spa-relax"  id="spa-relax" class="one1" onclick="link_servico()">Leia Mais</a>
			</li>
<!-- ------------------------------------------ -->

			<li class="col span_1_of_4">
				<h3>Spa Facial</h3>
					<div class="grid-img">
						<img src="images/pic3.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					</div>
					<a href="./paginas/servicos.php?cat=spa-facial" class="one1">Leia Mais</a>
			</li >
			<li class="col span_1_of_4">
				<h3>Spa Redux</h3>
					<div class="grid-img">
						<img src="images/pic2.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					<a href="./paginas/servicos.php?cat=spa-redux" class="one1">Leia Mais</a>
			</li>
			<li class="col span_1_of_4">
				<h3>Depilação Com Cera</h3>
					<div class="grid-img">
						<img src="images/pic6.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					</div>
					<a href="./paginas/servicos.php?cat=depilacao-cera" class="one1">Leia Mais</a>
			</li>
			<li class="col span_1_of_4">
				<h3>Depilação Definitiva</h3>
					<div class="grid-img">
						<img src="images/pic6.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					</div>
					<a href="./paginas/servicos.php?cat=depilacao-definitiva" class="one1">Leia Mais</a>
			</li>
			<li class="col span_1_of_4">
				<h3>Sobrancelha</h3>
					<div class="grid-img">
						<img src="images/pic6.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					</div>
					<a href="./paginas/servicos.php?cat=sobrancelha" class="one1">Leia Mais</a>
			</li>
			<li class="col span_1_of_4">
				<h3>Micropigmentação</h3>
					<div class="grid-img">
						<img src="images/pic6.jpg" alt=""/>
					</div>
					<div class="grid-text">
						<p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					</div>
					<a href="./paginas/servicos.php?cat=micropigmentacao" class="one1">Leia Mais</a>
			</li>

		</ul>
		<script>
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
        visibleItems: 3,
        animationSpeed: 2000,
        autoPlay: true,
        autoPlaySpeed: 4000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: false,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 3
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 3
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3
            }
        }
		});
		});
		</script>
		<div class="clear"></div>
			</div>
		</div>
	</div>
	</div>
<?php require("paginas/sub-paginas/footer.php") ?>