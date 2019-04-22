<?php    
if(!isset($bezpiecznik) || !isset($_SESSION['zalogowany']))
header('location: index.php?strona=glowna');
if(isset($_SESSION['typ']))
    if($_SESSION['typ']!='admin')
        header('location: index.php?strona=glowna');
?>
<div class="well">
 <ul class="nav nav-tabs">
      <li class="active"><a href="#dodajKsiazke" data-toggle="tab">Dodaj książke</a></li>
      <li><a href="#banowanie" data-toggle="tab">Zbanuj użytkownika</a></li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="dodajKsiazke">
          <?php
                      if(isset($_SESSION['blad'])){
                echo "<br><span style=\"color:red\">{$_SESSION['blad']}</span>";
                echo "<br>";
                unset($_SESSION['blad']);
            }  
            if(isset($_SESSION['udane'])){
                echo "<br><span style=\"color:green\">{$_SESSION['udane']}</span>";
                unset($_SESSION['udane']);
                echo "<br>";
            }  
          ?>
        <form id="tab" method="post" action="dodawanie.php">
            <br>
            <div class="form-group">
            <label>Tytuł:</label>
            <br>
            <input type="text" id="tytul" name="tytul" placeholder="Tytuł książki" class="form-control">
            </div>
            <br>
            <div class="form-group">
            <label>Autor:</label>
            <br>
            <input type="text" id="autor" name="autor" placeholder="Autor książki" class="form-control">
            </div><br>
            <div class="form-group">
            <label>Opis:</label>
            <br>
            <input type="text" id="opis" name="opis" placeholder="Opis książki" class="form-control">
            </div><br>
            <div class="form-group">
            <label>Rok wydania:</label>
            <br>
            <input type="text" id="rok" name="rok" placeholder="Rok Wydania" class="form-control">
            </div><br>
            <div class="form-group">
            <label>Liczba stron:</label>
            <br>
            <input type="text" id="lStron" name="lStron" placeholder="Liczba stron" class="form-control">
            </div><br>
            <div class="form-group">
            <label>Obrazek:</label>
            <br>
            <input type="text" id="obrazek" name="obrazek" placeholder="Ścieżka obrazka" class="form-control">
            </div>
            <input type="submit" id="przyciskDodaj" class="btn btn-default" value="Aktualizuj" disabled>
        </form>
<script> 
  var tytul =document.getElementById('tytul');        
  var autor =document.getElementById('autor');        
  var opis =document.getElementById('opis');        
  var rok =document.getElementById('rok');        
  var lStron =document.getElementById('lStron');        
  var obrazek =document.getElementById('obrazek');        
  var przyciskDodaj =document.getElementById('przyciskDodaj');  
    
    tytul.addEventListener('input',blokuj);
    autor.addEventListener('input',blokuj);
    opis.addEventListener('input',blokuj);
    rok.addEventListener('input',blokuj);
    lStron.addEventListener('input',blokuj);
    obrazek.addEventListener('input',blokuj);
    
    function blokuj(){
        if(tytul.value==""||autor.value==""||opis.value==""||rok.value==""||lStron.value==""||obrazek.value==""){
            przyciskDodaj.disabled=true;
        }else{
            przyciskDodaj.disabled=false;
        }
    }
</script>
      </div>
      <div class="tab-pane fade" id="banowanie">

                <?php
         $polaczenie = new mysqli('localhost','root','','twojaKsiazka');
            if(!$polaczenie->connect_error){
                $polaczenie -> set_charset('utf8');

                $sql ="SELECT `id_uzytkownika`,`login`, `email`,`typ`,`ban` FROM `uzytkownicy`";
                if($rezultat = $polaczenie -> query($sql)){
                
                    echo <<<HTML
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <table class="table zbior">
                                        <h1 id="naglowek">Lista użytkowników</h1>
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Login</th>
                                                <th>Email</th>
                                                <th>Rodzaj</th>
                                                <th>Co zrobić</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
HTML;

                    while($wiersz = $rezultat -> fetch_assoc()){
                        echo <<<HTML
                            <tr>
								<th scope="row">{$wiersz['id_uzytkownika']}</th>
								<td>{$wiersz['login']}</td>
								<td>{$wiersz['email']}</td>
								<td>{$wiersz['typ']}</td>
HTML;
                        if($wiersz['ban']){
                            echo "<td><a href=\"banowanie.php?id={$wiersz['id_uzytkownika']}\">Odbanuj</a></td>";
                        }else{
                            echo "<td><a href=\"banowanie.php?id={$wiersz['id_uzytkownika']}\">Zbanuj</a></td>";
                        }
                        
							echo "</tr>";
                    }

                    echo <<<HTML
                                     </tbody></table>   
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
      </div>
      
  </div>
</div>