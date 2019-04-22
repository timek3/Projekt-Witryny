
<?php    
if(!isset($bezpiecznik))
header('location: index.php?strona=logowanie');
?>	
<div class="jumbotron">
		<div class="container">
		<h1 id="naglowek">Logowanie do serwisu</h1>
		<br>
        <?php
            if(isset($_GET['blad'])){
                $_SESSION['blad']="Musisz się zalogować, żeby dodać do ulubionych";
            }
            if(isset($_SESSION['blad'])){
                echo "<span style=\"color:red\">{$_SESSION['blad']}</span>";
                echo "<br>";
                unset($_SESSION['blad']);
            }  
            if(isset($_SESSION['udane'])){
                echo "<span style=\"color:green\">{$_SESSION['udane']}</span>";
                unset($_SESSION['udane']);
                echo "<br>";
            }  
        ?>
        <br>
            <div style="max-width: 700px;">
			<form method="post" action="login.php">
	 			<div class="form-group">
		 			<label for="Login">Login </label>
		  			<input type="text" class="form-control" id="login" name="login" placeholder="Login">
	 			</div>
	 			<div class="form-group">
		  			<label for="haslo">Hasło</label>
					<input type="password" class="form-control" id="haslo" name="haslo" placeholder="Hasło">
				</div>
				 <input type="submit" class="btn btn-default" value="Zaloguj" id="przycisk" disabled>
                <div id="komunikatl" style="color: red"></div>
                <div id="komunikath" style="color: red"></div>
			</form>
            </div>
            <br>
            <a href="index.php?strona=rejestracja">Nie masz konta? Zarejestruj się</a>
		</div>
</div>
<script src="js/logowanie.js"></script>
