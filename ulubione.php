<?php    
session_start();
if(!isset($_SESSION['ulubione']) || !isset($_GET['strona']) || !isset($_GET['ksiazka']))
header('location: index.php?strona=zbior');



$polaczenie = new mysqli('localhost','root','','twojaKsiazka');
if(!$polaczenie->connect_error){
    $polaczenie -> set_charset('utf8');
    $id = $_SESSION['id'];
    $ksiazka = $_SESSION['ksiazka'];
    $ulubione = $_SESSION['ulubione'];
   
	if($ulubione){
		$sql ="DELETE FROM `ulubione` WHERE `id_ksiazki` like '$ksiazka' and `id_uzytkownika` like '$id' ";
		$polaczenie -> query($sql);
        $_SESSION['blad'] = "Usunięto książke z ulubionych";
        $xd = $_GET['ksiazka'];
        $polaczenie -> close();
        header("location: index.php?strona=wynik&ksiazka=$xd"); 
	}else{
		$sql = "INSERT INTO `ulubione`(`id_uzytkownika`, `id_ksiazki`) VALUES ('$id','$ksiazka')";
		$polaczenie -> query($sql);
        $_SESSION['blad'] = "Dodano książke do ulubionych";
	    $xd = $_GET['ksiazka'];
        $polaczenie -> close();
        header("location: index.php?strona=wynik&ksiazka=$xd"); 
	}
   
}else{
    $_SESSION['blad'] = "Coś poszło nie tak";
	$xd = $_GET['ksiazka'];
    header("location: index.php?strona=wynik&ksiazka=$xd"); 
}


?>