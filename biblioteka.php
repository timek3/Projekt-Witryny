<?php

if(!isset($bezpiecznik) || !isset($_SESSION['id']))
header('location: index.php?strona=zbior');
$id = $_SESSION['id'];
$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
            if(!$polaczenie->connect_error){
                $polaczenie -> set_charset('utf8');

                $sql ="SELECT `id_ksiazki`,`tytul`, `autor`,`opis`,`rokWydania`, `obrazek` FROM `ksiazki` WHERE `id_ksiazki` in (SELECT `id_ksiazki` FROM ulubione WHERE id_uzytkownika = '$id')";
                if($rezultat = $polaczenie -> query($sql)){
                
                    echo <<<HTML
                    <div class="jumbotron">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="table zbior">
                                        <h1 id="naglowek">Lista twoich ulubionych książek</h1>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tytuł</th>
                                                <th>Data wydania</th>
                                                <th>Autor</th>
                                                <th>Grafika</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
HTML;
                        $i=1;
                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
                            <tr class="clickable-row" data-href="?strona=wynik&ksiazka={$wiersz['id_ksiazki']}">
								<th scope="row">$i</th>
								<td>{$wiersz['tytul']}</td>
								<td>{$wiersz['rokWydania']}</td>
								<td>{$wiersz['autor']}</td>
								<td><img class="obraz-tabela" src="{$wiersz['obrazek']}"></td>
							</tr>
HTML;
                        $i++;
                    }

                    echo <<<HTML
                                     </tbody></table>   
                                </div>
                            </div>
                        </div>
                    </div>          
HTML;
                       $polaczenie ->close();
            }else{
                    $polaczenie ->close();
                echo "<h2>Coś poszło nie tak</h2>";
            }
                
           
        }else{
                echo "<h2>Coś poszło nie tak</h2>";
        }



?>