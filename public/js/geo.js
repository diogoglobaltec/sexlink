


//função que pega valores dos campos do formulário e retorna valor por array.
function cid() {

    var formLocais = [
    document.getElementById("cidade1").value,
    document.getElementById("rua").value
]

  return  formLocais;
}

//função deixar nomes dos locais no padrão para fazer busca no nominatim.
function retornacid() {


    //   console.log(cid()[0]);
    //   console.log(cid()[1]);

   var nomeEstado  = cid()[0].replaceAll(' ','%20')
   var nomeCidade = cid()[1].replaceAll(' ','%20')
   var LocalizacaoLimpa = [nomeEstado,nomeCidade];

return  LocalizacaoLimpa;

}


//edita o link para API nominatim.
function EditaUrlNominatim() {

//console.log(retornacid()[0]);
//console.log(retornacid()[1])


nomeRua =  retornacid()[1]
nomeCidade = retornacid()[0]
numeroRua = 10


    // LocalizacaoLimpa não é gerado no return
// não funciona   => console.log(LocalizacaoLimpa[0])

//'+numeroRua+'+




let url =  'https://nominatim.openstreetmap.org/search?q='+nomeRua+','+nomeCidade+'+&format=json';


return url


}



//
//
//ajax para obter retorno da api de endereços nominatim.
function ajaxEnd() {



let url = EditaUrlNominatim()
//console.log(url)

 let xhr = new XMLHttpRequest();

    xhr.open("GET", url, true);

    // function execute after request is successful
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
           // console.log(this.responseText);
              var saida = this.responseText;
              var obj =    JSON.parse(saida);
              console.log(obj)



for (let index = 0; index < obj.length; index++) {


         var RuaSelecionada = obj[index].display_name;
         var RuaLimpa = RuaSelecionada.split(",",3)
         var Bairro = RuaSelecionada.split(",")
             console.log(Bairro[1]);
             console.log('ajaxEnd função ajaxx');

            let opt = document.createElement("option");
            opt.setAttribute("value", RuaLimpa);
            opt.setAttribute("id", "id["+index+"]")
            let nod = document.createTextNode(RuaLimpa);
            opt.appendChild(nod);
            document.getElementById("cel").appendChild(opt);
            document.getElementById("bairro").value= Bairro[1];
}






        }}
xhr.send();


}


function checkValue() {

    if (!document.getElementById("rua").value=="") {

        console.log('checkValue')
        console.log(document.getElementById("rua").value)
        document.getElementById("rua").value=""
        console.log(document.getElementById("rua").value)


        console.log('ver tamanho dos objetos......')

    var  tamanho = document.getElementById("cel").length


        console.log(tamanho)


        for (let index = 0; index < tamanho; index++) {
            const element = tamanho[index];


           console.log(document.getElementById("id["+index+"]").value);

document.getElementById("id["+index+"]").remove()



        }






    }


}



function zera() {




x = document.getElementById("cel").selectedIndex;



var ab = document.getElementById("id["+x+"]").value;

var arlocal = ab.split(",")

document.getElementById("bairro").value= arlocal[1];



}











function pegacidade() {


console.log('testando.............................')
console.log(document.getElementById("selecionar").value)



  rua = document.getElementById('rua').value;
  numero = document.getElementById('numero').value;
  cidade= document.getElementById('cidade1').value;




    //console.log(rua)
    //nomeRua= rua.replaceAll(' ','%20')
    //nomeCidade= cidade.replaceAll(' ','%20')
    //numeroRua= numero
    //console.log(nomeRua)
    //console.log(numeroRua)
    //console.log('nome da cidade:...'+nomeCidade)

    console.log('length rua: '+rua.length);








    //ajax
    // Creating Our XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    xhr.open("GET", url, true);

    // function execute after request is successful
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
              const saida = this.responseText;
              const obj =    JSON.parse(saida);




     if(rua.length > 0){

            console.log('quantidade resultados retornados: '+obj.length);
            console.log('nome retornado no array 0: '+obj[0].display_name)
            console.log('latitude: '+obj[0].lat);
            console.log('longitude: '+obj[0].lon);






for (let index = 0; index < obj.length; index++) {



         var RuaSelecionada = obj[index].display_name;
         var RuaLimpa = RuaSelecionada.split(",",3)

         var Bairro = RuaSelecionada.split(",")

             console.log(Bairro[1]);
    console.log('testando para ver se acho bairro .................');




            let opt = document.createElement("option");
            opt.setAttribute("value", RuaLimpa);
            let nod = document.createTextNode(RuaLimpa);
            opt.appendChild(nod);
            document.getElementById("selecionar").appendChild(opt);


            document.getElementById("bairro").value= Bairro[1];


}

     }

        }
    }
    // Sending our request

xhr.send();


}
