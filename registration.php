<?php    
session_start();
if(empty($_POST['login']) ||
   empty($_POST['haslo']) ||
   empty($_POST['email']) ||
   empty($_POST['przycisk']) ||
   empty($_POST['regulamin'])){   
header('location: index.php?strona=rejestracja'); 
}

$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
if(!$polaczenie->connect_error){
    $polaczenie -> set_charset('utf8');
    $login = $polaczenie -> real_escape_string(htmlentities($_POST['login']));
    $haslo = $polaczenie -> real_escape_string(htmlentities($_POST['haslo']));
    $email = $polaczenie -> real_escape_string(htmlentities($_POST['email']));
	$login = trim($login);
    
    $sql ="SELECT `login` FROM `uzytkownicy` WHERE `login` = '$login' ";
    if($rezultat = $polaczenie -> query($sql)){
        if ($rezultat ->num_rows > 0 ){
            $_SESSION['blad'] = "Istnieje już taki użytkownik";
            $polaczenie ->close();
            header('location: index.php?strona=rejestracja');
        }else{
            $sql = "INSERT INTO `uzytkownicy` (`id_uzytkownika`, `login`, `haslo`, `email`) VALUES ('', '$login', '$haslo', '$email')";
            if($polaczenie->query($sql)){
                $_SESSION['udane'] = "Został utworzony użytkownik $login. Teraz zaloguj się.";
                $polaczenie->close();
                header('location: index.php?strona=logowanie'); 
            }else{
                $polaczenie->close();
                $_SESSION['blad'] = "Coś poszło nie tak";
                header('location: index.php?strona=rejestracja'); 
            }
        }
    }
    
}else{
    $_SESSION['blad'] = "Coś poszło nie tak";
    header('location: index.php?strona=rejestracja'); 
}
?>