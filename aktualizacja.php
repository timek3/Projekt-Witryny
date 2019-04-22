<?php    
session_start();
if(!isset($_SESSION['zalogowany']))
header('location: index.php?strona=glowna');

if(!empty($_POST['login']) && !empty($_POST['email'])){
    $polaczenie = new mysqli('localhost','root','','twojaKsiazka');
    if(!$polaczenie->connect_error){
    $polaczenie -> set_charset('utf8');
    $login = $polaczenie -> real_escape_string(htmlentities($_POST['login']));
    $email = $polaczenie -> real_escape_string(htmlentities($_POST['email']));
	$login = trim($login);
    $id = $_SESSION['id'];
        
        
    $sql ="SELECT `login` FROM `uzytkownicy` WHERE `login` = '$login' ";
    if($rezultat = $polaczenie -> query($sql)){
        if ($rezultat ->num_rows > 0 ){
            $_SESSION['blad'] = "Istnieje już taki użytkownik";
            $polaczenie ->close();
            header('location: index.php?strona=panelUzytkownika');
        }else{    
            $sql ="UPDATE `uzytkownicy` SET `login` = '$login', `email`= '$email' WHERE `id_uzytkownika` like '$id'";
            if($polaczenie->query($sql)){
                $_SESSION['udane'] = "Nazwa została zmieniona na $login";
                $_SESSION['login'] = $login;
                $polaczenie->close();
                header('location: index.php?strona=panelUzytkownika'); 
            }else{
                $polaczenie->close();
                $_SESSION['blad'] = "Coś poszło nie tak";
                header('location: index.php?strona=panelUzytkownika'); 
            }
        }
    }
    }
}else if(!empty($_POST['haslo'])){
      $polaczenie = new mysqli('localhost','root','','twojaKsiazka');
    if(!$polaczenie->connect_error){
    $polaczenie -> set_charset('utf8');
    $haslo = $polaczenie -> real_escape_string(htmlentities($_POST['haslo']));

    
    $sql ="UPDATE `uzytkownicy` SET `haslo` = '$haslo' WHERE `id_uzytkownika` like '$id' ";
    if($rezultat = $polaczenie -> query($sql)){  
        $_SESSION['udane'] = "Pomyślnie zmieniono hasło";
            $polaczenie ->close();
            header('location: index.php?strona=panelUzytkownika');
    }else{
        $_SESSION['blad'] = "Coś poszło nie tak";
            $polaczenie ->close();
            header('location: index.php?strona=panelUzytkownika');
    }
    }
}else{
    $_SESSION['blad'] = "Coś poszło nie tak";
    header('location: index.php?strona=glowna');
}