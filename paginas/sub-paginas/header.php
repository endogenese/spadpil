<!DOCTYPE HTML>
<html>
<head>
<title>Free Relaxation Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="/css/edit-templates.css">
<link rel="stylesheet" href="/css/flexisel-master.css">
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.flexisel.js"></script>
<script src="/js/servicos.js"></script>

</head>
<body>
	<!-- PLUGIN SOCIAL -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- PLUGIN SOCIAL -->
	<div class="tamanho-geral-conteudo">
		<header>
	 	<div class="wrap">
	 		<div class="logo">
	 			<a href="/index.php"><img src="/images/logo.png" alt=""/></a>
	 		</div>
			 	<nav>
					<a href="#" id="menu-icon"></a>
						<ul>	
							<li><a href="/index.php" class="current">Home</a></li>
							<li><a href="/paginas/sobre.php" class="current">Sobre</a></li>
							<li><a href="/paginas/servicos.php" class="current">Serviços</a></li>
							<!-- <li><a href="/paginas/blog/index.php"class="current">Blog</a></li>
							<li><a href="blog.html" class="current">Galeria</a></li> -->
							<li><a href="/paginas/contato.php" class="current" >Contato</a></li>
							<div class="clear"></div>
						</ul>
				</nav>
				<div class="clear"></div>
		</div>
	</header>
	<div class="banner">
		<div class="banner-wrap">
			<div class="banner-img">
			<img src="/images/two.jpg" alt=""/>
		</div>
	</div>
	</div>

	<div class="header-bot">
		<!-- TEXTO QUE ALTERNA -->
		<div class="wrap">
			<div class="head-img">
				<img id="imagem" src="/images/pic.jpg" alt=""/>
			</div>
			<div class="head-desc">
				<p id="texto" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ab suscipit beatae ducimus saepe ut eaque praesentium modi, tempore velit soluta autem fugiat provident nam, ipsam nulla natus quisquam odio!</p>
			</div>
		</div>
		
		<div>

		<script type="text/javascript">
		//SCRIPT PARA ALTERNAR O TEXTO NA HOME.
		$(document).ready(function(){
			var y = 1;
			setInterval(function(){ 
				//alterna o conteudo dependendo do valor da variável y;
				switch(y) {
				case 1:
				    $("#imagem").attr("src", "/images/pic.jpg"); //muda a imagem;
				    $("#texto").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat assumenda velit quisquam, ea vel qui voluptatum voluptatibus tempora laboriosam!");	//muda o texto;
				    y = 2; //muda o valor da variável y, para a próxima execução;
				    break;
				case 2:
				    $("#imagem").attr("src", "/images/pic2.jpg");
				    $("#texto").html("Segundo <a href='http://www.endogenese.com.br'>Texto</a>");
				    y = 3;
				    break;
				case 3:
					$("#imagem").attr("src", "/images/pic3.jpg");
				    $("#texto").html("Terceiro <span style='color: red'>Texto <span>");
					y = 1;
				    break;
				default:
				    $("#imagem").attr("src", "/images/pic.jpg");
				    $("#texto").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ab suscipit beatae ducimus saepe ut eaque praesentium modi, tempore velit soluta autem fugiat provident nam, ipsam nulla natus quisquam odio!");
				    y = 1;
				} 
				//Aqui muda o tempo; 
			}, 4000);
		});
		</script>

			<div class="clear"></div>
		</div>
	</div>