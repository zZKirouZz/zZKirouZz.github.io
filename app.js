let imagenes = [
    {
        "url": "img/gym.webp",
        "nombre": "GYM",
        "descripcion": "Ir al gym de Lunes a Sabado por desde las 9am"

    },
    {
        "url": "img/JS.webp",
        "nombre": "JavaScript",
        "descripcion": "Aprender mas sobre JS para despues dominar algun framework"

    },
    {
        "url": "img/nodejs.webp",
        "nombre": "NodeJS",
        "descripcion": ""

    },
    {
        "url": "img/reactJS.webp",
        "nombre": "ReactJS",
        "descripcion": "ReactJS es un framework muy demandado y es de los mas faciles de manejar"

    },
    {
        "url": "img/c++.webp",
        "nombre": "C++",
        "descripcion": "Leer sobre C++\n Comunicacion entre Software y Hardware "

    },
    {
        "url": "img/c.webp",
        "nombre": "C",
        "descripcion": "Leer sobre C\n Control total con el hardware"

    },
    {
        "url": "img/cisco.webp",
        "nombre": "Network Addressing and Basic Troubleshooting",
        "descripcion": "Curso de Verano sobre Direccionamiento Basico y Solucion de Problemas"

    },
    {
        "url": "img/ciscoB.png",
        "nombre": "Banda",
        "descripcion": "Insignia verificada en Credly"

    }
]

let atras = document.getElementById('atras');
let adelante = document.getElementById('adelante');
let imagen = document.getElementById('img');
let puntos = document.getElementById('puntos');
let texto = document.getElementById('texto')
let actual = 0
posicionCarrusel()

atras.addEventListener('click', function(){
    actual -=1

    if (actual == -1){
        actual = imagenes.length - 1
    }

    imagen.innerHTML = ` <img class="img" src="${imagenes[actual].url}" alt="logo pagina" loading="lazy"></img>`
    texto.innerHTML = `
    <h3>${imagenes[actual].nombre}</h3>
    <p>${imagenes[actual].descripcion}</p>
    `
    posicionCarrusel()
})  
adelante.addEventListener('click', function(){
    actual +=1

    if (actual == imagenes.length){
        actual = 0
    }

    imagen.innerHTML = ` <img class="img" src="${imagenes[actual].url}" alt="logo pagina" loading="lazy"></img>`
    texto.innerHTML = `
    <h3>${imagenes[actual].nombre}</h3>
    <p>${imagenes[actual].descripcion}</p>
    `
    posicionCarrusel()
})  

function posicionCarrusel() {
    puntos.innerHTML = ""
    for (let i = 0; i <imagenes.length; i++){
        if(i == actual){
            puntos.innerHTML += '<p class="bold">.<p>'
        }
        else{
            puntos.innerHTML += '<p>.<p>'
        }
    } 
}