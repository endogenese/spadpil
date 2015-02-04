<?php require("sub-paginas/header.php") ?>
<script src="/js/servicos.js"></script>
	<div class="content">
		<div class="wrap">
			<div class="services">
				<div class="services-top">
						<div class="col span_1_of_12">
							<ul id="sub-menu-servico">
								<li><span class="one1" id="spa-relax">Spa Relax</span></li>
								<li><span class="one1" id="spa-facial">Spa Facial</span></li>
								<li><span class="one1" id="spa-redux">Spa Redux</span></li>
								<li><span class="one1" id="depilacao-cera">Depilação Com Cera</span></li>
								<li><span class="one1" id="depilacao-definitiva">Depilação Definitiva</span></li>
								<li><span class="one1" id="sobrancelha">Sobrancelha</span></li>
								<li><span class="one1" id="micropigmentacao">Micropigmentação</span></li>
							</ul>
						</div>
						
						<div class="clear"></div>
					</div>

					<div id="conteudo-servico">
						<?php 
						if (isset($_GET["cat"])){
							require("servicos/".$_GET["cat"].".php");
						}
						else
						{
							require("servicos/spa-relax.php");
						}
						

						?>
					</div>
									
<!-- ----------------------------------------TESTEMUNHAS -------------------------------- -->
				<div class="services-bot services-bott">
					<div class="col span_1_of_1">
							<h3>Testemunhas</h3>
							<div class="bot-img">
								<div class="s-grid-img">
									<img src="/images/pic13.jpg" alt=""/>
								</div>
								<div class="s-grid-desc">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="bot-img">
								<div class="s-grid-img">
									<img src="/images/pic14.jpg" alt=""/>
								</div>
								<div class="s-grid-desc">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
								</div>
							<div class="clear"></div>
					</div>
					<div class="bot-img">
							<div class="s-grid-img">
								<img src="/images/pic15.jpg" alt=""/>
							</div>
							<div class="s-grid-desc">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
							</div>
							<div class="clear"></div>
					</div>
				</div>
					<div class="clear"></div>
				</div>
			</div>
	</div>
	</div>
</div>
<?php require("sub-paginas/footer.php") ?>