<?php    
if(!isset($bezpiecznik) || !isset($_SESSION['zalogowany']))
header('location: index.php?strona=glowna');

echo "<div class=\"well\"><h1>Zmień ustawienia konta</h2>";
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

    <ul class="nav nav-tabs">
      <li class="active"><a href="#danePanel" data-toggle="tab">Dane</a></li>
      <li><a href="#hasloPanel" data-toggle="tab">Hasło</a></li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="danePanel">
        <form id="tab" method="post" action="aktualizacja.php">
            <br>
            <div class="form-group">
            <label>Login:</label>
            <br>
            <input type="text" id="login" name="login" placeholder="Nowy login" class="form-control">
            </div>
            <br>
            <div class="form-group">
            <label>Email:</label>
            <br>
            <input type="text" id="Email" name="email" placeholder="Nowy email" class="form-control">
            </div>
            <input type="submit" id="przyciskDane" class="btn btn-default" value="Aktualizuj" disabled>
        </form>
        <div id="komunikatl" style="color: red"></div>
        <div id="komunikate" style="color: red"></div>
      </div>
      <div class="tab-pane fade" id="hasloPanel">
    	<form id="tab2" method="post" action="aktualizacja.php">
        	<br>
            <div class="form-group">
            <label>Stare hasło:</label>
            <br>
            <input type="password" id="haslo1" placeholder="Stare hasło" class="form-control">
            </div>
            <br>
            <div class="form-group">
            <label>Nowe hasło:</label>
            <br>
            <input type="password" id="haslo2" name="haslo" placeholder="Nowe hasło" class="form-control">
            <div id="sila" style="color: white; border-radius: 3px; padding-left: 10px;"></div>
            </div>
            <input type="submit" id="przyciskHaslo" class="btn btn-default" value="Aktualizuj" disabled>
    	</form>
        <div id="komunikath" style="color: red"></div>
      </div>
      
  </div>
</div>

<script src="js/aktualizacja.js"></script>
