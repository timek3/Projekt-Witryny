<?php
    session_start();
    if(!isset($_POST['szukaj'])){
        if(isset($_GET['strona'])){
            $strona = $_GET['strona'];
        }else{
            header('location: ?strona=glowna');
        }
    }
    if(isset($_GET['ksiazka'])){
            $ksiazka = "&ksiazka=".$_GET['ksiazka'];
    }else{
        $ksiazka =  "";
    }
	unset($_SESSION['ulubione']);
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
                  }else{
                    $login = ucfirst ($_SESSION['login']);
                    echo @<<<HTML
                    <li>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Zalogowany: $login <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="?strona=panelUzytkownika">Ustawienia</a></li>
                        <li><a href="?strona=biblioteka">Biblioteka</a></li>
HTML;
                        if(isset($_SESSION['typ']))if($_SESSION['typ']=='admin') echo "<li><a href=\"?strona=panelAdmina\">Zarządzaj</a></li>";
                        echo @<<<HTML
                        <li class="divider"></li>
                        <li><a href="wyloguj.php?strona=$strona$ksiazka">Wyloguj</a></li>
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
            <form method="post" action="">
                <input type="text" name="szukaj" placeholder="Wyszukaj..." id="search_box"/>
                <input type="submit" name="szukajPrzycisk" value="Szukaj" class="search_button" /><br />
            </form>
        </div> 
	</nav>

        
<br>
<br>
<?php 
    $bezpiecznik=true;
    if(!isset($_POST['szukaj'])){
        if(file_exists("$strona.php")){
            include("$strona.php");
        }else{
             header('location: index.php?strona=glowna');
        }
    }else{
        echo "<div class=\"jumbotron\"><div class=\"container\"><div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">";
        if($_POST['szukaj']==""){
            echo "<h2>Wpisz coś, aby wyszukać</h2>";
        }else{
            $polaczenie = new mysqli('localhost','root','','twojaKsiazka');
            if(!$polaczenie->connect_error){
                $polaczenie -> set_charset('utf8');
                $szukaj = $polaczenie -> real_escape_string(htmlentities($_POST['szukaj']));

                $sql ="SELECT `id_ksiazki`, `tytul`, `autor`, `obrazek` FROM `ksiazki` WHERE `tytul` like '%$szukaj%' or `autor` like '%$szukaj%'";
                if($rezultat = $polaczenie -> query($sql)){
                if ($rezultat ->num_rows === 0 ){
                    echo "<h2>Brak wyników</h2>";
                }else{
                    echo "<h1 id=\"naglowek\">Liczba wyników wyszukiwania - {$rezultat ->num_rows}:</h1>";
                    
                    $i=1;
                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
                                    <a href="?strona=wynik&ksiazka={$wiersz['id_ksiazki']}">
                                        <div style="display: flex; justify-content: space-between">
                                            <h2 style="color: #222">$i. {$wiersz['tytul']} - {$wiersz['autor']}</h2><img class="obraz-tabela" src="{$wiersz['obrazek']}">
                                        </div>
                                    </a>
                        <br>
HTML;
                        $i++;
                    }
                }
            }else{
                echo "<h2>Coś poszło nie tak</h2>";
            }

        }else{
                echo "<h2>Coś poszło nie tak</h2>";
        }

    }
        echo "</div></div></div></div>";
    }
?>
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