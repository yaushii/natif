var spanMinutes = document.getElementById("minutes");
var spanSeconds = document.getElementById("seconds");
var spanMillis = document.getElementById("millis");

var chrono = 0;   // millisecondes
var timer = null; // pour stocker le handle du timer

function reset() { // remet le compteur à zéro
  chrono = -1;
  increment();
}

function start() {
if (timer == null){
 	timer = setInterval(increment, 1);
  }
}

function stop() {
	clearInterval(timer);
  timer = null;
}

function increment() {
	// TODO: 
  //  - incrémenter le chrono 
  chrono++;
  //  - calculer minutes, secondes, millis
  var millis = chrono %1000;
  var seconds = ~~(chrono / 1000) % 60;
  var minutes = ~~(chrono / 60000);
  //  - mettre à jour le HTML
  spanMinutes.innerHTML = ("0"+minutes).slice(-2);
  spanSeconds.innerHTML = ("00"+seconds).slice(-2);
  spanMillis.innerHTML = ("000"+millis).slice(-3);
}

// enregistrer les événements
document.getElementById("start").addEventListener('click', start);
document.getElementById("stop").addEventListener('click', stop);
document.getElementById("reset").addEventListener('click', reset);