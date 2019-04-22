<?php    
if(!isset($bezpiecznik))
header('location: index.php?strona=zbior');

if (isset($_GET["numerek"])){ $numerek  = $_GET['numerek']; }else { $numerek=1; }; 
$poczatek = ($numerek-1)*10;
$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
            if(!$polaczenie->connect_error){
                $polaczenie -> set_charset('utf8');

                $sql ="SELECT DISTINCT ksiazki.`id_ksiazki`, `tytul`, `autor`,`opis`,`rokWydania`, `obrazek` FROM `ksiazki` LIMIT $poczatek, 10";
                if($rezultat = $polaczenie -> query($sql)){
                
                    echo <<<HTML
                    <div class="jumbotron">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="table zbior">
                                        <h1 id="naglowek">Przegląd książek</h1>
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
                        $i=1+$poczatek;
                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
                            <tr class="clickable-row" data-href="?strona=wynik&ksiazka={$wiersz['id_ksiazki']}">
								<th scope="row">$i</th>
								<td>{$wiersz['tytul']}</td>
								<td>{$wiersz['rokWydania']}</td>
								<td>{$wiersz['autor']}</td>
								<td><img class="obraz-tabela" src="{$wiersz['obrazek']}" alt="{$wiersz['tytul']}"></td>
							</tr>
HTML;
                        $i++;
                    }
                    echo "</tbody></table><div id=\"numeryStron\">";
                    $sql2="SELECT COUNT(*) AS Suma FROM `ksiazki`";
                    if($rezultat2 = $polaczenie -> query($sql2)){
                        $wiersz = $rezultat2 -> fetch_assoc();
                        $sumaStron = ceil($wiersz['Suma'] / 10);
                        for ($i=1; $i<=$sumaStron; $i++) { 
                            echo "<a href='index.php?strona=zbior&numerek=$i'><h3>$i</h3></a> "; 
                        }; 
                    }else{
                        echo "Coś poszło nie tak";
                    }
                    echo <<<HTML
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>          
HTML;
                       
            }else{
                echo "<h2>Coś poszło nie tak</h2>";
            }
                
           
        }else{
                echo "<h2>Coś poszło nie tak</h2>";
        }




?>
	
