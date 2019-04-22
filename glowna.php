<?php    
if(!isset($bezpiecznik))
header('location: index.php?strona=glowna');

$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
            if(!$polaczenie->connect_error){
                $polaczenie -> set_charset('utf8');

                $sql ="SELECT DISTINCT ksiazki.`id_ksiazki`, `tytul`, `autor`,`opis`,`rokWydania`, `obrazek` FROM `ksiazki` INNER JOIN ulubione ON ksiazki.id_ksiazki = ulubione.id_ksiazki GROUP BY ulubione.id_uzytkownika ORDER BY COUNT(ulubione.id_ksiazki) DESC LIMIT 5";
                if($rezultat = $polaczenie -> query($sql)){
                
                    echo <<<HTML
                    <div class="jumbotron">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                    <table class="table">
                                        <h1 id="naglowek">5 Najpopularniejszych książek</h1>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tytuł</th>
                                                <th>Data wydania</th>
                                                <th>Autor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
HTML;
                        $i=1;
                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
                        <tr>
								<th scope="row"><a href="#ksiazka$i">$i</a></th>
								<td><a href="#ksiazka$i">{$wiersz['tytul']}</a></td>
								<td><a href="#ksiazka$i">{$wiersz['rokWydania']}</a></td>
								<td><a href="#ksiazka$i">{$wiersz['autor']}</a></td>
							</tr>
HTML;
                        $i++;
                    }
                    
                    echo <<<HTML
                    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>          
HTML;
                       
            }else{
                echo "<h2>Coś poszło nie tak</h2>";
            }
                $sql ="SELECT DISTINCT ksiazki.`id_ksiazki`, `tytul`, `autor`,`opis`,`rokWydania`, `obrazek` FROM `ksiazki` INNER JOIN ulubione ON ksiazki.id_ksiazki = ulubione.id_ksiazki GROUP BY ulubione.id_uzytkownika ORDER BY COUNT(ulubione.id_ksiazki) DESC LIMIT 5";
                if($rezultat = $polaczenie -> query($sql)){

                    
                    echo <<<HTML
     <div class="container ">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">               
HTML;
    
                        $i=1;
                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
				<hr id="ksiazka$i" class="linia">
				
				<a href="?strona=wynik&ksiazka={$wiersz['id_ksiazki']}" >
					<div class="foo bar">
						<h1 class="text-success">{$wiersz['tytul']}</h1>
						<div class="content-obraz"">					
							<img src="{$wiersz['obrazek']}" alt="{$wiersz['tytul']}" class="img-thumbnail obraz ">
							<p class="text-success">	
							{$wiersz['opis']}
							</p>	
						</div>
					</div>
				</a>
HTML;
                        $i++;
                    }
                    
                    echo <<<HTML
                    
				</div>
          
HTML;
    
            }else{
                echo "<h2>Coś poszło nie tak</h2>";
            }
                $sql ="SELECT DISTINCT ksiazki.`id_ksiazki`, `tytul`, `autor`,`opis`,`rokWydania`, `obrazek` FROM `ksiazki` INNER JOIN ulubione ON ksiazki.id_ksiazki = ulubione.id_ksiazki GROUP BY ulubione.id_uzytkownika ORDER BY COUNT(ulubione.id_ksiazki) DESC LIMIT 5";
                if($rezultat = $polaczenie -> query($sql)){

                    
                    echo <<<HTML
            <div class="col-md-2 col-lg-2">
				<nav class="hidden-xs hidden-sm affix" id="nav-boczne">
					<ul class="nav ">
                        <li class="bg-info"><a class="kolor" href="#rozwijane"> Na góre</a></li>
HTML;
    
                        $i=1;
                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
				<li class="bg-info"><a class="kolor" href="#ksiazka$i">{$wiersz['tytul']}</a></li>
HTML;
                        $i++;
                    }
                    
                    echo <<<HTML
                        </ul>					
				    </nav>
				</div>
			</div>
		</div>            
HTML;
                    
            }else{
                    $polaczenie -> close();
                echo "<h2>Coś poszło nie tak</h2>";
            }

        }else{
                echo "<h2>Coś poszło nie tak</h2>";
        }

?>

