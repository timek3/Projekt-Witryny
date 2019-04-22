<?php    
if(!isset($bezpiecznik))
header('location: index.php?strona=rejestracja');
?>
<div class="jumbotron">
		<div class="container">
		<h1 id="naglowek">Rejestracja do serwisu</h1>
		<br>
        <?php
            if(isset($_SESSION['blad'])){
                echo "<span style=\"color:red\">{$_SESSION['blad']}</span>";
                unset($_SESSION['blad']);
            } 
        ?>
        <br>
        <div style="max-width: 700px;">
			<form method="post" action="registration.php">
                
	 			<div class="form-group">
		 			<label for="Login">Login </label>
		  			<input type="text" class="form-control" id="login" name="login" placeholder="Login">
	 			</div>
	 			<div class="form-group">
		 			<label for="Email">Adres Email </label>
		  			<input type="email" class="form-control" id="Email" name='email' placeholder="Email">
	 			</div>
	 			<div class="form-group">
		  			<label for="haslo">Hasło</label>
					<input type="password" class="form-control" id="haslo" name="haslo" placeholder="Hasło">
                    <br>
                    <div id="sila" style="color: white; border-radius: 3px; padding-left: 10px;"></div>
				</div>
                <input type="checkbox" name="regulamin" id="regulamin"> Zapoznałem się z <a href="Regulamin.pdf">regulaminem</a><br><br>
				 <input id="przycisk" type="submit" class="btn btn-default" value="Zarejestruj" disabled>
                
			</form>
            
            
                <div id="komunikatl" style="color: red"></div>
                <div id="komunikate" style="color: red"></div>
                <div id="komunikath" style="color: red"></div>
        </div>
		</div>
	</div>

<script src="js/rejestracja.js"></script>