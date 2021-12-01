let iconos = []
let selecciones = []

generarTablero()

function cargarIconos() {
    iconos = [
        '<i class="fas fa-star color1"></i>',
        '<i class="far fa-star color2"></i>',
        '<i class="fas fa-star-of-life color3"></i>',
        '<i class="fas fa-star-and-crescent color4"></i>',
        '<i class="fab fa-old-republic color5"></i>',
        '<i class="fab fa-galactic-republic color6"></i>',
        '<i class="fas fa-sun color7"></i>',
        '<i class="fas fa-stroopwafel color8"></i>',
        '<i class="fas fa-dice color9"></i>',
        '<i class="fas fa-chess-knight color10"></i>',
        '<i class="fas fa-chess color11"></i>',
        '<i class="fas fa-dice-d20 color12"></i>',
    ]
}

function generarTablero() {
    cargarIconos()
    selecciones = []
    let tablero = document.getElementById("tablero")
    let tarjetas = []
    for (let i = 0; i < 24; i++) {
        tarjetas.push(`
        <div class="area-tarjeta" onclick="seleccionarTarjeta(${i})">
            <div class="tarjeta" id="tarjeta${i}">
                <div class="cara trasera" id="trasera${i}">
                    ${iconos[0]}
                </div>
                <div class="cara superior">
                    <i class="far fa-question-circle"></i>
                </div>
            </div>
        </div>        
        `)
        if (i % 2 == 1) {
            iconos.splice(0, 1)
        }
    }
    tarjetas.sort(() => Math.random() - 0.5)
    tablero.innerHTML = tarjetas.join(" ")
}

function seleccionarTarjeta(i) {
    let tarjeta = document.getElementById("tarjeta" + i)
    if (tarjeta.style.transform != "rotateY(180deg)") {
        tarjeta.style.transform = "rotateY(180deg)"
        selecciones.push(i)
    }
    if (selecciones.length == 2) {
        deseleccionar(selecciones)
        selecciones = []
    }
}

function deseleccionar(selecciones) {
    setTimeout(() => {
        let trasera1 = document.getElementById("trasera" + selecciones[0])
        let trasera2 = document.getElementById("trasera" + selecciones[1])
        if (trasera1.innerHTML != trasera2.innerHTML) {
            let tarjeta1 = document.getElementById("tarjeta" + selecciones[0])
            let tarjeta2 = document.getElementById("tarjeta" + selecciones[1])
            tarjeta1.style.transform = "rotateY(0deg)"
            tarjeta2.style.transform = "rotateY(0deg)"
        }else{
            trasera1.style.background = "plum"
            trasera2.style.background = "plum"
        }
    }, 1000);
}

function ConTime() {
TimeRes = setInterval(() => {
Time--;
WidowsTime.innerHTML = 'Tiempo: ' + Time + 'segundos'
if(Time == 0) {
    clearInterval(TimeRes);
    Block();
}
},1000);
}      
function aciertosinner() {
WidowsAciertos.innerHTML = 'Aciertos: ' +aciertos;
WidowsTime.innerHTML = '¡Fantastico! Solo se ha demorado' + (60-Time) + 'segundos';
WidowsMove.innerHTML = 'Movimientos: ' + Move;
}
function Block() {
for(let i = 0; i <= 15; i++) {
let TarBlock = document.getElementById(i)
TarBlock.innerHTML = num[i];
TarBlock.disabled = true;
}
}