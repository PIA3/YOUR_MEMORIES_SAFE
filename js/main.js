// Init variable
let TarDes = 0;
let TarOne = null;
let TarTwo = null;

let OneResult = null;
let TwoResult = null;

let Move = 0;
let aciertos = 0;

let Tem = false;
let Time = 60;
let TimeRes = null;

let WidowsMove = document.getElementById('Movimientos');
let WidowsAciertos = document.getElementById('Aciertos');
let WidowsTime = document.getElementById('tiempo');

// Num Aleatory
let num = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
num.sort(() => {return Math.random()-0.5});

// Funtion Des
function Dest(id) {
    if(Tem == false) {
        ConTime();
        Tem = true;
    }
    TarDes++;
    if(TarDes == 1) {
        TarOne = document.getElementById(id);
        OneResult = num[id];
        TarOne.innerHTML = OneResult;
        TarOne.disabled = true;

    }else if(TarDes == 2) {
        TarTwo = document.getElementById(id);
        TwoResult = num[id];
        TarTwo.innerHTML = TwoResult;
        TarTwo.disabled = true;

        // Movimientos en incrementos
        Move++;
        WidowsMove.innerHTML = 'Movimiento: '+ Move;

        if(OneResult == TwoResult) {
            TarDes = 0;
            aciertos ++;
            WidowsAciertos.innerHTML = 'Aciertos: '+aciertos;

            if(aciertos == 8) {
                clearInterval(TimeRes);
                aciertosinner();
            }
        }else{
            // Tapatr valores de nuevo.
            setTimeout(() => {
                TarOne.innerHTML = ' ';
                TarOne.disabled = false;
                TarTwo.innerHTML = ' ';
                TarTwo.disabled = false;
                TarDes = 0;
            },800);
        }
    }
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

function Block() {
    for(let i = 0; i <= 15; i++) {
        let TarBlock = document.getElementById(i)
        TarBlock.innerHTML = num[i];
        TarBlock.disabled = true;
    }
}

function aciertosinner() {
    WidowsAciertos.innerHTML = 'Aciertos: ' +aciertos;
    WidowsTime.innerHTML = '¡Fantastico! Solo se ha demorado' + (60-Time) + 'segundos';
    WidowsMove.innerHTML = 'Movimientos: ' + Move;
}