$(document).ready(function(){
	$("ul li span").click(function(){
		$("#conteudo-servico").load("/paginas/servicos/"+$(this).attr("id")+".php");
	});
});