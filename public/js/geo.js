
function pegacidade() {
  rua = document.getElementById('rua').value;
  numero = document.getElementById('numero').value;
  cidade= document.getElementById('cidade1').value;




    //console.log(rua)
    nomeRua= rua.replaceAll(' ','%20')
    nomeCidade= cidade.replaceAll(' ','%20')
    numeroRua= numero
    console.log(nomeRua)
    console.log(numeroRua)
    console.log('nome da cidade:...'+nomeCidade)





//  Tentativa de ajax
    // Creating Our XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Making our connection
    let url =  'https://nominatim.openstreetmap.org/search?q='+numeroRua+'+'+nomeRua+','+nomeCidade+'+&format=json';


    console.log(url)

   //let url =  'https://nominatim.openstreetmap.org/search?q=511+rua%20vitorino%20carmilo,+são%20paulo&format=json';





    xhr.open("GET", url, true);

    // function execute after request is successful
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
              const saida = this.responseText;
              const obj =    JSON.parse(saida);



            console.log(obj.length);


            console.log(obj[0].lat);
            console.log(obj[0].lon);




        }
    }
    // Sending our request

xhr.send();













}
