//console.log("test");

var images = document.getElementsByClassName("cible");
var images = document.getElementsByClassName("dis");
var images = document.getElementsByClassName("plomb");
console.log(images);

function ToggleBorder(event) {
  console.log(event.classList)
  if(event.classList != "dis active-border" ) {
    event.classList.add("active-border");
  }else{
    event.classList.remove("active-border");
  }
}


document.querySelectorAll('.dis').forEach(item => {
  item.addEventListener('click', event => {
    ToggleBorder(item)
  })
})




function ToggleBorderCible(event) {
  console.log(event.classList)
  if(event.classList != "cible active-borderCible" ) {
    event.classList.add("active-borderCible");
  }else{
    event.classList.remove("active-borderCible");
  }
}


document.querySelectorAll('.cible').forEach(item => {
  item.addEventListener('click', event => {
    ToggleBorderCible(item)
  })
})

function ToggleBorderPlomb(event) {
  console.log(event.classList)
  if(event.classList != "plomb active-borderPlomb" ) {
    event.classList.add("active-borderPlomb");
  }else{
    event.classList.remove("active-borderPlomb");
  }
}


document.querySelectorAll('.plomb').forEach(item => {
  item.addEventListener('click', event => {
    ToggleBorderPlomb(item)
  })
})