// Fun��o que verifica se o navegador tem suporte AJAX 
function AjaxF()
{
	var ajax;
	
	try
	{
		ajax = new XMLHttpRequest();
	} 
	catch(e) 
	{
		try
		{
			ajax = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e) 
		{
			try 
			{
				ajax = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e) 
			{
				alert("Seu browser n�o da suporte � AJAX!");
				return false;
			}
		}
	}
	return ajax;
}

// Fun��o que faz as requisi��o Ajax ao arquivo PHP
function AlteraConteudo()
{
	var dados = "nome="+$('#nome').val()+"&latitude="+$('#latitude').val()+"&longitude="+$('#longitude').val();
		$.get( "retorna_informacoes.php?"+dados ).done(function(data) {
		console.log(data);
		$('#conteudo').text(data);
	});
}