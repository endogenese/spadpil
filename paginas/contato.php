<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
</script>
<script src="/js/geolocalizacao.js"></script>
<?php require("sub-paginas/header.php") ?>
	<div class="content">
		<div class="wrap">
			<div class="contact">
			<div class="col span_1_of_s">
				<h3>Formulário de Contato</h3>
				<form action="../php/plugin-contato.php" method="post">
			<div>
				<input type="text" name="tNome" class="textbox" placeholder="Nome:" >
			</div>
			<div>
				<input type="email" name="tEmail" class="textbox" placeholder="E-mail:" >
			</div>
			<div>
				<input type="tel" name="tTelefone" class="textbox" placeholder="Fone:" maxlength="15">
			</div>
			<div>
				<input type="text" name="tAssunto"class="textbox" placeholder="Assunto:">
			</div>
			<div>
				<textarea placeholder="Mensagem:" name="tMensagem"></textarea>
			</div>
			<div>
			 	<span class="button"><input name="enviar" type="Submit" value="Enviar"></span>
			 	<span class="button"><input type="Reset" value="Limpar"></span>
			 </div>
			 <div class="clear"></div>
		 </form>	
			</div>
			<div class="col span_1_of_s">
				<h3>Localização</h3>
				<div class="map">
					<div id="map1" style=""></div>
				</div>
				<p><strong>Endereço:</strong><br>
				Rua Antonio de Pádua Gomes (3ª rua cidade alta) nº 166-A / Itaituba-PA <br>
				(93) 98133-3424 | 99112-1491 / (93) 3518-3723</p>			
			</div>
			<div class="clear"></div>
			
		</div>
	</div>
	</div>
	<!-- --------------------------- -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(-4.27007199, -55.98723069);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>
<!-- --------------------------- -->
<?php require("sub-paginas/footer.php") ?>