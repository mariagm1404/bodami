var vistaActual=null;
const nav=document.getElementById('nav');    
var id=null;
var menu=nav.querySelectorAll('p');

function cambiarNav(idNav){
    menu.forEach(function(palabra,index){
            palabra.classList.remove("subrayado");
            var idpal=palabra.getAttribute('id');
            if(idpal==idNav){
                palabra.classList.add("subrayado");
            }
    });     
}

function cambiarVista(id){
    if(vistaActual){
        document.getElementById(vistaActual).classList.remove("visible");
    }
    document.getElementById(id).classList.add("visible");
    vistaActual=id;   
}
cambiarVista("inicio");
cambiarNav('inicios')
menu.forEach(function(word,index){
    word.addEventListener("click",function(event){
        var idsitio=event.target.id;
        switch(idsitio){
        case "asistir":
            id="asistencia";
            break;
        case "iglesia":
            id="LIglesia";
            break;
        case "restaurante":
            id="LRest";
            break;
        case "hotel":
            id="LHotel";
            break;
        case "regalo":
            id="LRegalo"
            break;
        default:
            id="inicio";       
    }
        cambiarVista(id);
        cambiarNav(idsitio);
    })
})



//Cuenta atrás

// Fecha final de la cuenta regresiva (puede ser en formato de fecha o milisegundos)
const endDate = new Date("2024-10-10T12:00:00").getTime();

// Actualizar la cuenta regresiva cada segundo
const countdown = setInterval(function() {

    // Obtener la fecha y hora actuales
    const now = new Date().getTime();
    
    // Calcular la diferencia entre la fecha final y la fecha actual
    const distance = endDate - now;
    
    // Calcular los días, horas, minutos y segundos restantes
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Mostrar el tiempo restante en el elemento con id="countdown"
    document.getElementById("countdown").innerHTML = `
        <div>${days}</div>
        <div>${hours}</div>
        <div>${minutes}</div>
        <div>${seconds}</div>
        <div>Días</div>
        <div>Horas</div>
        <div>Minutos</div>
        <div>Segundos</div>
    `;
    
    // Si la cuenta regresiva ha terminado, mostrar un mensaje
    if (distance < 0) {
        clearInterval(countdown);
        document.getElementById("countdown").innerHTML = "¡Es hoy!";
    }
}, 1000); // Actualizar cada segundo



function registrar() {
    var radios = document.getElementsByName('ir');
    var selectedValue;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            selectedValue = radios[i].value;
            break;
        }
    }
}


function otrapersona(){
    cambiarVista('asistencia');
}



function actualizarNumerosAsistentes(numeroBorrado) {
    var personas = document.querySelectorAll('[id^="persona"]');
    for (var i = 0; i < personas.length; i++) {
        var numeroActual = parseInt(personas[i].id.replace('persona', ''));
        if (numeroActual > numeroBorrado) {
            var nuevoNumero = numeroActual - 1;
            personas[i].id = 'persona' + nuevoNumero;
            personas[i].querySelector('#asistente').innerHTML = '<br>Invitado ' + nuevoNumero;
        }
    }
}


var añadirotro = document.getElementById('añadirotro');
var nasistentes = 0;


añadirotro.addEventListener('click', function () {
    nasistentes++;
    var personasDiv = document.getElementById("persona");
    var personaAnyadida = document.createElement('div');
    personaAnyadida.setAttribute('id','persona'+nasistentes);
    var b = document.createElement('div');
    b.setAttribute('id', 'bab');
    var otrapersona = document.createElement('div');
    otrapersona.setAttribute('id', 'otrapersona');
    var h3otra = document.createElement('h3');
    h3otra.setAttribute('id', 'asistente');
    h3otra.innerHTML = '<br>Invitado ' + nasistentes;
    otrapersona.appendChild(h3otra);
    var elimnado = document.createElement('div');
    var botonelimnado= document.createElement('button');
    botonelimnado.setAttribute('type','submit');
    botonelimnado.addEventListener('click',function(){
        var es =botonelimnado.parentNode.parentNode.parentNode;
        var final=es.parentNode;
        var numero = parseInt(final.id.replace('persona', ''));
        final.remove();
        actualizarNumerosAsistentes(numero);
        nasistentes--;
    })
    botonelimnado.innerHTML='<span class="material-symbols-outlined">delete</span><p>Eliminar</p>'
    elimnado.appendChild(botonelimnado);
    elimnado.setAttribute('id', 'figelim');
    otrapersona.append(elimnado);
    b.appendChild(otrapersona);
    personaAnyadida.appendChild(b);

    var uniqueId = 'id_' + nasistentes;
/*
    var nuevaPersonaDiv1 = document.createElement("div");
    nuevaPersonaDiv1.setAttribute('class', 'input-wrapper');
    nuevaPersonaDiv1.innerHTML = `<label for="nombre${uniqueId}"></label><input type="text" name="name[]" id="nombre${uniqueId}" placeholder="Nombre" required><br><br>`;
    personaAnyadida.appendChild(nuevaPersonaDiv1);

    var nuevaPersonaDiv2 = document.createElement("div");
    nuevaPersonaDiv2.setAttribute('class', 'input-wrapper');
    nuevaPersonaDiv2.innerHTML = `<label for="apellidos${uniqueId}"></label><input type="text" id="apellidos${uniqueId}" name="apellido[]" placeholder="Apellidos" required><br><br>`;
    personaAnyadida.appendChild(nuevaPersonaDiv2);*/

    var nuevaPersonaDiv3 = document.createElement("div");
    nuevaPersonaDiv3.classList.add('input-wrapper', 'asistira');
    nuevaPersonaDiv3.innerHTML = `
    <p id="asi${uniqueId}">Asistencia</p>
            <label for="si${uniqueId}">Si</label><input type="radio" id="si${uniqueId}" value="si" name="ir${uniqueId}" required>
            <label for="no${uniqueId}">No</label><input type="radio" id="no${uniqueId}" value="no" name="ir${uniqueId}" required><br>`;
    personaAnyadida.appendChild(nuevaPersonaDiv3);
/*
    var nuevaPersonaDiv4 = document.createElement("div");
    nuevaPersonaDiv4.setAttribute('class', 'input-wrapper');
    nuevaPersonaDiv4.innerHTML = `<br><label></label><input type="text" name="alergia[]" placeholder="¿Alguna alergia/intolerancia?">`;
    personaAnyadida.appendChild(nuevaPersonaDiv4);*/
    personasDiv.appendChild(personaAnyadida);
    //comprobarcheck();
});


document.getElementById('contactForm').addEventListener('submit', function(event) {
    //event.preventDefault();
    /*const form=document.getElementById('contactForm');
    var nombres = [];
    var asistencias = [];
    var alergias = [];

*/
    for (let i = 0; i < form.elements.length; i++) {
        const element = form.elements[i];
        // Comprobar el tipo de elemento y procesar según sea necesario
        /*
        if (element.name === 'name[]') {
            nombres.push(element.value);        } 
        else if (element.name.startsWith('ir')) {
            // Verificar cuál de los botones de radio está seleccionado
            if (element.checked) {
                asistencias.push(element.value);
            }
        }
        else if (element.name === 'alergia[]') {
            alergias.push(element.value);        } 
            */
            if (element.name.startsWith('ir')) {
                // Verificar cuál de los botones de radio está seleccionado
                if (element.checked) {
                    asistencias.push(element.value);
                }
            }
    }

    //localStorage.setItem('nombres', JSON.stringify(nombres));
    localStorage.setItem('asistencias', JSON.stringify(asistencias));
    //localStorage.setItem('alergias', JSON.stringify(alergias));

    
});

   /* const form=document.getElementById('contactForm');

    for (let i = 0; i < form.elements.length; i++) {
        const element = form.elements[i];
        // Comprobar el tipo de elemento y procesar según sea necesario
        if (element.name === 'name[]') {
            Fnombres.push(element.value);
        } else if (element.name.startsWith('ir[')) {
            // Verificar cuál de los botones de radio está seleccionado
            if (element.checked) {
                Fasistencia.push(element.value); // Agregar el valor ('si' o 'no') al array
            }
        } else if (element.name === 'alergia[]') {
            Falergia.push(element.value);
        }
    }
    console.log(Fnombres);
    console.log(Fasistencia);
    console.log(Falergia);
    cambiarVista('formularioenviado');
    for(var x=0;x<Fnombres.length;x++){
        var p = document.createElement('p');
        var as=Fasistencia[x];
        as=as[0];

        if(as=='s'){
            p.innerHTML="¡Genial "+Fnombres[x]+"! Te esperamos con hambre  y, por supuesto, para el banquete con tus mejores pasos de baile, ¡guarda energía para la conga!"
        }
        else{
            p.innerHTML="¡Qué tragedia "+Fnombres[x]+"! Tendremos que comer tu porción de pastel, pero lo haremos con lágrimas en los ojos."
        }
        var p2 = document.createElement('p');

        if(Falergia[x]!=""){
            p2.innerHTML="¡No te preocupes "+Fnombres[x]+"! Nuestro chef está preparado para todo, incluso para alérgicos al aburrimiento."
        }
        var div=document.getElementById('formularioenviado');
        div.appendChild(p);
        div.appendChild(p2);
    }
});*/



function volverIndex(){
    window.location.href = 'index.html';
}

function iglesia(){
    window.location.href='https://maps.app.goo.gl/NkTPZPAgQgFeUdnf6';
}

function parking1(){
    window.location.href='https://maps.app.goo.gl/rF3VSfJa6Z6JN8Wc6';
}

function parking2(){
    window.location.href='https://maps.app.goo.gl/NYgBauSBe1L19yKq9';
}

function parking3(){
    window.location.href='https://maps.app.goo.gl/sVuH2fE8u3qv3HNg8';
}
function ubirestaurante(){
    window.location.href='https://maps.app.goo.gl/DWkecNqSZZzGLBu67';
}


