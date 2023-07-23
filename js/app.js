/**********LOADER*********/
var loader = document.querySelector('.loader-bg');
window.addEventListener('load', function(){
    loader.classList.add('fondu-out');
})


/*************/
/***MENU SPY***/
var elm = document.querySelector('#main-header');
var ms = new MenuSpy(elm);

/**************/
/*****PARALLAX EFFECT ****/
document.addEventListener("mousemove", parallax);

function parallax(e){
document.querySelectorAll('.planet').forEach(function(move) {

        var moving_value = move.getAttribute('data-value');
        var x = e.clientX * moving_value /100;
        var y = e.clientY * moving_value /100;

        move.style.transform = 'translateX(' +x+ 'px) translateY(' +y+ 'px)';
    });
}


/*************/
/***ANIMATION SCROLL***/
const sr = ScrollReveal(
    {
    duration:2000,
    scale: .5,
    reset: true
    }
);

sr.reveal('.box',{
});

sr.reveal('.icon',{
});

sr.reveal('.langue',{
});
sr.reveal('.loisir',{
});


/*************/
/***PROJETS***/
var p1 = document.querySelector('.p1');
var p2 = document.querySelector('.p2');
var p3 = document.querySelector('.p3');
var p4 = document.querySelector('.p4');
var p5 = document.querySelector('.p5');
var p6 = document.querySelector('.p6');
var p7 = document.querySelector('.p7');
var background = document.querySelector('.fifth_section');
var screenBackground = document.querySelector('.fifth_section_screen');
var boutonPlus = document.querySelectorAll('.fifth_section a');


p1.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/projetwp-min.jpg');background-size: cover;";
})
p2.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/projettodo-min.jpg');background-size: cover;";
})
p3.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/projetcomm-min.jpg');background-size: cover;";
})
p4.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/projettwig-min.jpg');background-size: cover;";
})
p5.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/projetcontact-min.jpg');background-size: cover;";
})
p6.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/3d.png');background-size: cover;";
})
p7.addEventListener('mouseover', function(){
    screenBackground.style.cssText = "background-image:url('img/meteo.png');background-size: cover;";
})

/********************************/
/*********** FORMULAIRE *********/
var submit = document.getElementById('submit');
var fusee = document.getElementById('fusee');

var prenom = document.getElementById('nomprenom');
var prenom_m = document.getElementById('prenom_manquant');
var prenom_v = /^[a-zA-Zéèîï][a-zéèïîç]+([-'\s][a-zA-Zéèîï][a-zéèïîç])?/;
var prenom_valid = false;

var mail = document.getElementById('mail');
var mail_m = document.getElementById('mail_manquant');
var mail_v = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var message = document.getElementById('message');
var message_m = document.getElementById('message_manquant');
var message_v = /^[a-zA-Zéèîï][a-zéèïîç',;:'"]+([-<>\s][a-zA-Zéèîï][a-zéèïîç'!;,:"'])?/;


var longueur_m = message.length;

prenom.addEventListener('input', valid_global);
function valid_prenom(){
    if(prenom.validity.valueMissing){
        prenom_m.textContent = "Nom prenom manquant";
        prenom_m.style.color ='red';
        prenom.style.borderColor = "red";
        prenom.style.backgroundColor = "#ffbdbd";
        return false;
    } else if (prenom_v.test(prenom.value) == false){
        prenom_m.textContent = "2 caractères minimum";
        prenom_m.style.color ='orange';
        prenom.style.borderColor = "orange";
        prenom.style.backgroundColor = "#ffe7bd";
        return false;

    }else{
        prenom_m.textContent = '';
        prenom_m.style.color = 'green';
        prenom.style.borderColor = "green";
        prenom.style.backgroundColor = "#d1ffbd";
        return true;
    }
    
}
mail.addEventListener('input', valid_global);
function valid_mail(){
    if(mail.validity.valueMissing){
        mail_m.textContent = "Mail manquant";
        mail_m.style.color ='red';
        mail.style.borderColor = "red";
        mail.style.backgroundColor = "#ffbdbd";
        return false;
    } else if (mail_v.test(mail.value) == false){
        mail_m.textContent = "Format incorrect @ et . obligatoire";
        mail_m.style.color ='orange';
        mail.style.borderColor = "orange";
        mail.style.backgroundColor = "#ffe7bd";
        return false;
    }else{
        mail_m.textContent = '';
        mail_m.style.color = 'green';
        mail.style.borderColor = "green";
        mail.style.backgroundColor = "#d1ffbd";
        return true;
    }
}

message.addEventListener('input', valid_global);
function valid_message(){
    console.log('valid_message()');
    if(message.validity.valueMissing){
        message_m.textContent = 'Veuillez insérer un message';
        message_m.style.color = 'red';
        message.style.backgroundColor = '#ffbdbd';
        message.style.borderColor = 'red';
        return false;
    }else if (message_v.test(message.value) == false){
        message_m.textContent = "Format incorrect du message";
        message_m.style.color = "orange";
        message.style.backgroundColor = "#ffe7bd";
        message.style.borderColor = "orange";
        return false;
    }
    else{
        message_m.textContent = '';
        message_m.style.color = 'green';
        message.style.borderColor = "green";
        message.style.backgroundColor = "#d1ffbd";
        return true;
    }   
    
}

function valid_global() {
    if(valid_prenom() && valid_mail() &&  valid_message()){
        submit.removeAttribute('disabled');
    }
    else{
        submit.setAttribute('disabled', "");
    }
}


/*******COMPTE LE NOMBRE DE CARACTèRES *******/
function charcountupdate(str) {
	var lng = str.length;
	document.getElementById("longueur_m").innerHTML = lng + ' /150';
}


/***********/
/*** ANIMATION FUSEE ***/
submit.addEventListener('click', function(){
fusee.classList.add('slide-out-top');})


/**********RECAPTCHA*****/
grecaptcha.ready(function() {
    grecaptcha.execute('#', {
        action: 'homepage'
    }).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
    });
});

