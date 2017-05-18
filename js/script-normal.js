var link = document. querySelector(".maps");
var close = document. querySelector(".close-modal");
var modal = document. querySelector(".modal");
var link3 = document. querySelector(".map");
var modal3 = document. querySelector(".modal3");
var close3 = document. querySelector(".close-modal3");
var linkD = document. querySelector(".D");
var modalD = document. querySelector(".point-delivery");
var linkG = document. querySelector(".G");
var modalG = document. querySelector(".point-delivery2");
var linkK = document. querySelector(".K");
var modalK = document. querySelector(".point-delivery3");
var login = modal.querySelector("[name=login]");
var email = modal.querySelector("[name=e-mail]")
var textf = modal.querySelector("[name=text-e]")
var form = modal.querySelector("form");
var storage = localStorage.getItem('login');

link.addEventListener("click", function(){
    modal.classList.toggle("show")

    if (storage){
        login.value = storage;
        email.focus();
    } else{
         login.focus();
    }
});

close.addEventListener("click", function(){
    modal.classList.remove("show")
});

window.addEventListener("keydown", function(e){
if (e.keyCode === 27){
    modal.classList.remove("show")
}
});

form.addEventListener('submit', function(){
    if(!login.value || !password.value || !textf.value){
    alert('Заполните все поля')
    } else{
        localStorage.setItem("login", login.value)
        localStorage.setItem("email", email.value)
    }
});



link3.addEventListener("click", function(){
    modal3.classList.toggle("show3")
});
close3.addEventListener("click", function(){
    modal3.classList.remove("show3")
});

window.addEventListener("keydown", function(e){
if (e.keyCode === 27){
    modal3.classList.remove("show3")
}
});



linkD.addEventListener("click", function(){
   modalD.classList.add("showD")
   modalG.classList.remove("showG")
   modalK.classList.remove("showK")
});

linkG.addEventListener("click", function(){
   modalG.classList.add("showG")
   modalD.classList.remove("showD")
   modalK.classList.remove("showK")
});

linkK.addEventListener("click", function(){
   modalK.classList.add("showK")
   modalD.classList.remove("showD")
   modalG.classList.remove("showG")
});