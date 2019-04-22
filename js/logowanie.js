var elLogin = document.getElementById('login');
var elHaslo = document.getElementById('haslo');
var elKomunikatL = document.getElementById('komunikatl');
var elKomunikatH = document.getElementById('komunikath');
var elPrzycisk = document.getElementById('przycisk');

elLogin.addEventListener('input',sprawdz);
elLogin.addEventListener('input',blokada);
elHaslo.addEventListener('input',sprawdz);
elHaslo.addEventListener('input',blokada);
    
    function sprawdz(){
        
        if(elLogin.value.length <3){
            if(elLogin.value.length ==""){
                elKomunikatL.innerHTML = "Wpisz login<br>";
            }else{
                elKomunikatL.innerHTML = "Login jest za krótki <br>";
            }
        }else if(elLogin.value.length > 17){
                elKomunikatL.innerHTML = "Login jest za długi";
        }else{
                elKomunikatL.innerHTML = "";
        }
        
        if(elHaslo.value.length <3){
            if(elHaslo.value.length ==""){
                elKomunikatH.innerHTML = "Wpisz Hasło<br>";
            }else{
                elKomunikatH.innerHTML = "Hasło jest za krótkie <br>";
            }
        }else{
                elKomunikatH.innerHTML = "";
        }
        
    }
    
    function blokada(){
        if(elLogin.value.length >=3 & elHaslo.value.length >=3){
            elPrzycisk.disabled = false;
        }else{
            elPrzycisk.disabled = true;
        }
    }