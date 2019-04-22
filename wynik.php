<?php    
if(!isset($bezpiecznik) || !isset($_GET['ksiazka']))
header('location: index.php?strona=glowna');

$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
if(!$polaczenie->connect_error){
    $polaczenie -> set_charset('utf8');
    $ksiazka = $polaczenie -> real_escape_string(htmlentities($_GET['ksiazka']));
    
    $sql ="SELECT `id_ksiazki`, `tytul`, `autor`,`opis`,`rokWydania`, `obrazek`, `liczbaStron` FROM `ksiazki` WHERE `id_ksiazki` LIKE '$ksiazka'";
    
    
    if($rezultat = $polaczenie -> query($sql)){
        if ($rezultat ->num_rows === 0 ){
            echo "<h3>Nie istnieje taka książka</h3>";
        }else{
            $wiersz = $rezultat -> fetch_assoc();
                echo <<<HTML
                    <div class="jumbotron">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    
                                    <img src="{$wiersz['obrazek']}">

                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <h2>{$wiersz['tytul']}</h2>
                                    
HTML;
                
                if(isset($_SESSION['id'])){
                    $id = $_SESSION['id'];
					$_SESSION['ksiazka'] = $ksiazka ;
                    $sql2 ="SELECT `id_ksiazki`, `id_uzytkownika` FROM `ulubione` WHERE `id_uzytkownika` LIKE '$id' AND `id_ksiazki` LIKE '$ksiazka'";
                    if($rezultat2 = $polaczenie -> query($sql2)){
                            if ($rezultat2 ->num_rows > 0 ){
                                $_SESSION['ulubione']=true;
                                echo "<a href=\"ulubione.php?strona=wynik&ksiazka=$ksiazka\"><img class=\"przyciskUlubione\" src=\"img/delete.jpg\"></a>";
                            }else{
                                $_SESSION['ulubione']=false;
                                echo "<a href=\"ulubione.php?strona=wynik&ksiazka=$ksiazka\"><img class=\"przyciskUlubione\" src=\"img/add.jpg\"></a>";

                            }
                    }else{
                        echo "Error";
                    }
                }else{
                    
                    echo "<a href=\"?strona=logowanie&blad=\"><img class=\"przyciskUlubione\" src=\"img/add.jpg\"></a>";
                }
                echo <<<HTML
                                    <h3>{$wiersz['autor']}</h3>
                                    <br>
                                    <h3>Liczba stron: {$wiersz['liczbaStron']}</h3>
                                    <h3>Rok wydania: {$wiersz['rokWydania']}</h3>
                                    <br>
                                    <br>
                                    <h3>{$wiersz['opis']}</h3>
                                </div>
                            </div>
                        </div>
                    </div>     
HTML;
            if(isset($_SESSION['blad'])){
                 echo '<script type="text/javascript">alert("' . $_SESSION['blad'] . '")</script>';
                unset($_SESSION['blad']);
            }  
        }
    }
    
}else{
    header('location: index.php?strona=glowna'); 
}
?>	