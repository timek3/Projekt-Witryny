<?php    
session_start();
if(empty($_POST['login']) ||
   empty($_POST['haslo']) ||
   empty($_POST['przycisk'])){   
header('location: index.php?strona=logowanie'); 
}

$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
if(!$polaczenie->connect_error){
    
    $polaczenie -> set_charset('utf8');
    $login = $polaczenie -> real_escape_string(htmlentities($_POST['login']));
    $haslo = $polaczenie -> real_escape_string(htmlentities($_POST['haslo']));
	$login = trim($login);
    
    $sql ="SELECT `id_uzytkownika`, `login`, `haslo`, `typ`, `ban` FROM `uzytkownicy` WHERE `login` = '$login' AND `haslo`='$haslo' ";
        if($rezultat = $polaczenie -> query($sql)){
                $wiersz = $rezultat -> fetch_assoc();
            if($wiersz['ban']){
                $_SESSION['blad'] = "Zostałeś zbanowany";
                $polaczenie->close();
                header('location: index.php?strona=logowanie');
                die;
            }
            if ($rezultat ->num_rows > 0 ){
                $_SESSION['zalogowany'] = true;
                $_SESSION['login'] = $login;
                $_SESSION['typ'] = $wiersz['typ'];
                $_SESSION['id'] = $wiersz['id_uzytkownika'];
                
                $polaczenie->close();
                header('location: index.php');
            }else{
                $_SESSION['blad'] = "Błędne dane logowania";
            $polaczenie->close();
                header('location: index.php?strona=logowanie');
            }
        
        }else {
            $polaczenie->close();
            $_SESSION['blad'] = "Coś poszło nie tak";
            header('location: index.php?strona=logowanie'); 
        }
    
}else{
    $_SESSION['blad'] = "Coś poszło nie tak";
    header('location: index.php?strona=logowanie'); 
}
?>