    var elLogin = document.getElementById('login');
    var elEmail = document.getElementById('Email');
    var elHaslo = document.getElementById('haslo');
    var elRegulamin = document.getElementById('regulamin');
    var elKomunikatL = document.getElementById('komunikatl');
    var elKomunikatE = document.getElementById('komunikate');
    var elKomunikatH = document.getElementById('komunikath');
    var elPrzycisk = document.getElementById('przycisk');
    var elSila = document.getElementById('sila');


    elLogin.addEventListener('input',sprawdzLogin);
    elLogin.addEventListener('input',blokada);


    elHaslo.addEventListener('input',sprawdzHaslo);
    elHaslo.addEventListener('input',blokada);
    elHaslo.addEventListener('input',sila);

    elEmail.addEventListener('input', sprawdzEmail);
    elEmail.addEventListener('input',blokada);
    elRegulamin.addEventListener('input',blokada);
    
    var regMail = /^[a-z0-9][\w\.\-]{1,28}[a-z0-9]\@[a-z0-9]{1,10}\.([a-z0-9]{2,10}\.)?[a-z]{2,3}$/;
    
    function sprawdzLogin(){
        
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
    }
    
    function sprawdzHaslo(){
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
    
    function sprawdzEmail(){
        if(regMail.test(elEmail.value)){
            elKomunikatE.innerHTML = "";
        }else{
            elKomunikatE.innerHTML = "Nieprawidłowy e-mail<br>";
        }
    }
    
    function blokada(){
        if(elLogin.value.length >= 3 & elHaslo.value.length >= 3 & regMail.test(elEmail.value) & elRegulamin.checked){
            elPrzycisk.disabled = false;
        }else{
            elPrzycisk.disabled = true;
        }
    }
        
    function sila(){
        if (elHaslo.value.length >3){
            var licznik = 0;
            var regMale= /[a-z]/;
            var regDuze= /[A-Z]/;
            var regZnaki= /[\W\_]/;
            var regCyfry= /\d/;
            if (regMale.test(elHaslo.value)) {licznik++;}
            if (regDuze.test(elHaslo.value)) {licznik++;}
            if (regZnaki.test(elHaslo.value)) {licznik++;}
            if (regCyfry.test(elHaslo.value)) {licznik++;}
            if (licznik==1) {elSila.textContent = 'Słabe'; elSila.style.backgroundColor = 'red'; elSila.style.width = '50%';}
            else if (licznik==2) {elSila.textContent = 'Dobre'; elSila.style.backgroundColor = 'orange'; elSila.style.width = '75%';}
            else if (licznik>=3) {elSila.textContent = 'Bardzo dobre'; elSila.style.backgroundColor = 'green'; elSila.style.width = '100%';}
            else elSila.textContent = '';
        }else{
            elSila.textContent ='';
        }
    }