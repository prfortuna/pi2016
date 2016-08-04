<?php

include("cabecalho.php");

$location = $_GET['location'];
$produto_id = $_GET['produto_id'];

/*
 * Caso o Location recebido seja vazio, define redirecionamento para o Index após o login.
 * */
if ($location == ""){
    $location = "index.php";
}

?>


<div class="content">	
		<div class="container">
			<div class="register">
			<div class="col-md-6 login-right">
			  	<h3>Login</h3>
				
				<form name="login" action="./ValidaLogin.php" method="POST">
                    <input type="hidden" name="location" value="<?=$location?>">
                    <input type="hidden" name="produto_id" value="<?=$produto_id?>">
                    <div>
					<span>Email</span>
					<input type="text" name="email" required="true">
				  </div>
				  <div>
					<span>Senha</span>
					<input type="password" name="senha" required="true">
				  </div>
				  <a class="forgot" href="#"></a>
				  <input type="submit" value="Login">
			    </form>
			   </div>	
			 
			   
			   <div class="clearfix"> </div>
		</div>
				<!---->
			
		</div>
	</div>




<?php

include("rodape.php");

?>