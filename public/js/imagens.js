



function demoVisibility(){


xs = document.getElementById('ocultaimg')
if(xs.checked) {

  const imagensOpacas =  document.getElementsByTagName('img')

    console.log(imagensOpacas.length+ ' totoal de imagens');




    imagensOpacas[1].style.opacity= "0.01";


    console.log(xs.checked);


     console.log(xs.checked == true);


    }

if(xs.checked == false){


    // Creating Our XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Making our connection
    let url =  'https://nominatim.openstreetmap.org/search?q=511+rua%20vitorino%20carmilo,+são%20paulo&format=json';

    xhr.open("GET", url, true);

    // function execute after request is successful
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
              const saida = this.responseText;
              const obj =    JSON.parse(saida);



            console.log(obj[0].name);
            console.log(obj[0].lat);
            console.log(obj[0].lon);



        }
    }
    // Sending our request

xhr.send();
}
}








