<?php
    session_start();
    if(!isset($_POST['szukaj']) ||
       !isset($_POST['szukajPrzycisk'])){
        header('location: index.php');
    }

    $polaczenie = new mysqli('localhost','root','','twojaKsiazka');
    if(!$polaczenie->connect_error){
        $szukaj = $polaczenie -> real_escape_string(htmlentities($_POST['szukaj']));

        $sql ="SELECT `id_ksiazki`, `tytul`, `autor` FROM `ksiazki` WHERE `tytul` like '%$szukaj%' or `autor` like '%$szukaj%'";
        if($rezultat = $polaczenie -> query($sql)){
            if ($rezultat ->num_rows === 0 ){
                echo "Brak wyników";
            }else{
                while($wiersz = $rezultat -> fetch_assoc()){
                    echo $wiersz['tytul'];
                }
            }
        }else{
            echo "coś nie ten teges";
        }

    }else{
        echo "Coś poszło nie tak";
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Twoja Książka</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.2.1.js"></script>
</head>
<body>
   
        <?php
        echo <<<HTML
            <div id="header">
       
             <img src="img/header.jpg">
            
        </div>
HTML;
        ?>
    <nav id="mainHeader" class="navbar navbar-inverse navbar-static">
        
	  <div  class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#rozwijane" aria-expanded="false">
	        <span class="sr-only">Toggle </span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a id="logo" class="navbar-brand" href="index.php"><h3><img src="img/logo.png">Twoja Książka</h3></a>
	    </div>  
	    <div class="collapse navbar-collapse" id="rozwijane">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="?strona=zbior"><h3>Zbiór Książek</h3></a></li>
	        <li><a href="?strona=galeria"><h3>Galeria</h3></a></li>       
            <?php
                  if(!isset($_SESSION['zalogowany'])){
                    echo "<li><a href=\"?strona=logowanie\"><h3>Zaloguj się</h3></a></li>";
                  }
              if(isset($_SESSION['zalogowany'])){
                $login = ucfirst ($_SESSION['login']);
                echo <<<HTML
                  <li>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Zalogowany: $login <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Akcja</a></li>
                        <li class="divider"></li>
                        <li><a href="wyloguj.php">Wyloguj</a></li>
                      </ul>
                    </div>  
                    </li>
HTML;
              }
            ?>
	      </ul>
	    </div>
	  </div>
        <div style="margin-bottom:5px; text-align: center;">
            <form method="post" action="wyszukiwanie.php">
                <input type="text" name="szukaj" placeholder="Wyszukaj..." id="search_box"/>
                <input type="submit" name="szukajPrzycisk" value="Szukaj" class="search_button" /><br />
            </form>
        </div> 
	</nav>

        
<br>
<br>
<hr>
	<footer class="footer">
		<div class="container">
			<p class="text-muted">
			<a href="#rozwijane" class="back-to-top"> Na góre </a><br><br>
			&copy; 2017 Marek Timm

			</p>
		</div>
	</footer>
<script src="js/przewijanie.js"></script>
<script src="js/pokazywanie.js"></script>
<script src="js/scrollreveal.js"></script>
<script>
    window.sr = ScrollReveal();
    sr.reveal('.foo');
    sr.reveal('.bar');
</script>
</body>
</html>