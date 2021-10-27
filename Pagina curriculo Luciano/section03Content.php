<form id="frmLogin">
	User:  <input type="text" name="user" ><br>
	Senha: <input type="password" name="pass"><br>
	<input type="button" id="btnEnviar" value="Enviar">
</form>


<script type="text/javascript">
	$(document).ready(function() {
		$("#btnEnviar").click(function() {
			var url   = "section04content.php";
			var dados = $("#frmLogin").serialize();
			$.post( url, dados, function( responseText ) {
				// $("#sct02" ).html( responseText );
				var objResponse = JSON.parse( responseText );
				var outText = "Status da Autenticação:"+objResponse.login+"<br>"+"Mensagem:"+objResponse.message;  
				$("#sct02" ).html( outText);
				console.log( objResponse );
			} );
		});
	});
</script>