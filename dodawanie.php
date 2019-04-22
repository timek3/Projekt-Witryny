<?php    
session_start();
if(empty($_POST['tytul']) ||
   empty($_POST['autor']) ||
   empty($_POST['opis']) ||
   empty($_POST['rok']) ||
   empty($_POST['obrazek']) ||
   empty($_POST['lStron'])){   
header('location: index.php?strona=panelAdmina'); 
}

$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
if(!$polaczenie->connect_error){
    $polaczenie -> set_charset('utf8');
    $tytul = $polaczenie -> real_escape_string(htmlentities($_POST['tytul']));
    $autor = $polaczenie -> real_escape_string(htmlentities($_POST['autor']));
    $opis = $polaczenie -> real_escape_string(htmlentities($_POST['opis']));
    $rok = $polaczenie -> real_escape_string(htmlentities($_POST['rok']));
    $obrazek = $polaczenie -> real_escape_string(htmlentities($_POST['obrazek']));
    $lStron = $polaczenie -> real_escape_string(htmlentities($_POST['lStron']));

    

            $sql = "INSERT INTO `ksiazki` VALUES ('', '$tytul', '$autor', '$opis','$rok','$lStron','$obrazek')";
          if($polaczenie->query($sql)){
              $_SESSION['udane'] = "Pomyślnie dodano książkę";
                          $polaczenie->close();
                header('location: index.php?strona=panelAdmina'); 
          }else{
              $_SESSION['blad'] = "Wystąpił błąd";
                         $polaczenie->close();
                header('location: index.php?strona=panelAdmina'); 
          }
            


    
}else{
    $_SESSION['blad'] = "Wystąpił błąd";
    header('location: index.php?strona=panelAdmina'); 
}
?>