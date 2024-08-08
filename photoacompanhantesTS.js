
const puppeteer = require('puppeteer');
const fs = require('fs');
const { isArray } = require('lodash');
const download = require('download');


   (async () => {

     const database = require('./db');
     const Deposito = require('./depositos');
     const endereco = require('./enderecos');
     const acompanhante = require('./acompanhantes');
     const fotoDB= require('./fotos');
     const underground = require('./underground');






    const bcrypt = require('bcrypt');
    const saltRounds = 10;
    const myPlaintextPassword = 'asdfasdf';
    const someOtherPlaintextPassword = 'not_bacon';



    const browser = await puppeteer.launch({ headless: false  },{product : "chrome" });
    const page = await browser.newPage();
    await page.goto('https://www.photoacompanhantes.com/travestis/sao-paulo/');




    //para fazer scrapping do conteúdo da página não preciso clicar no botão de aceitar cookie.
    // const a = await page.$("#formulario_adulto_ok")
    //await page.waitForTimeout(8000)
    //a.click()



    const urls = await page.$$eval("img", (el) => {
      return el.map((a) => a.getAttribute("alt"));
    });

    const fotos = await page.$$eval("img", (el) => {
      return el.map((a) => a.getAttribute("src"));
    });






    tamanhoArrayFotos = fotos.length
    tamanhoArray = urls.length
    arrayLimpo = urls.slice(9,tamanhoArray)
    arrayLimpoFotos = fotos.slice(9,tamanhoArrayFotos)


   var a = 0;
   var b = 0;


   const nome = []
   const telefone = []
   const fotoacomp = []



console.log(arrayLimpo.length);
console.log(arrayLimpoFotos.length);




   function FotoEach(EachFoto){


    fotoacomp[b] = arrayLimpoFotos[b]





    b++;


   }






   await fotos.forEach(FotoEach);








//limpar array nome e telefone.

    function imprime(item){


      if(a <= arrayLimpo.length-1){




      InicioDoTelefone = arrayLimpo[a].indexOf("(");








      nome[a] = arrayLimpo[a].slice(0,InicioDoTelefone)
      console.log("                           nome")

      console.log(nome[a])



      console.log("                        telefone")

      telefone[a] = arrayLimpo[a].slice(InicioDoTelefone,InicioDoTelefone+15)


      console.log(telefone[a])

      console.log("                       Foto GP")


      console.log(fotoacomp[a])


      console.log('estamos no:'+a)
        console.log('--------------------------------')












      a++



      }

      }

 await urls.forEach(imprime);



 /*************************************************************
  * Entrada no banco de dados....
  *Usei pacote bcrypt para adicionar senhas no banco de dados
  *este pacote é o padrão usado no laravel.
  *bcrypt hash com 10 cost factor
  *
  *
  *
  *
  *
  ***************************************************************
 */





 try {
  const resultado = await database.sync();


      LoopParaAdicionar = nome.length-1;

      for(inicia=0;inicia<LoopParaAdicionar;inicia++){


//criando senha aleatória para gp logar no sistema, atualmente com 5 caracteres.

        let ver = (Math.random() + 1).toString(36).substring(7);
        console.log("random", ver);

//final da senha aleatória é 12345
        let myPlaintextPassword = ver+'12345';

        bcrypt.hash(myPlaintextPassword, saltRounds, function(err, hash) {

          });
          const senha= bcrypt.hashSync(myPlaintextPassword, saltRounds);
          console.log(senha)



          //fazer controle para adição de usuários no banco de dados,para não duplicarmos GP.


          const SaidaDeposito = await Deposito.findOne({

            where: {
              name: nome[inicia]
            }



          });



          if (SaidaDeposito === null) {
            console.log('Not found!');
            console.log('Not found!');
            console.log('Not found!');
            console.log('Not found!');
            console.log('Not found!');


            const resultadoCreate = await Deposito.create({
              name: nome[inicia],
              email: ver+"@sexlink.com",
              password: senha,

          })




          //pegar o id do cadastro criado

          const PegarIdCriado = await Deposito.findAll({

            where: {
              name: nome[inicia]
            },attributes:['id','name']

          });






          //usar campos abaixo para gravar na tabela enderecos
          //gravar id,nome,TELEFONE será o item importante para limpar anúncios repetidos.
          //cada anúncio deve pagar 100 reais para se manter no ar, começar com promoção... R$50 1 ano quem aderir
          //cuidado com fotos com telefone... preciso pesquisar como borrar imagens com IA que identifica números em fotos...


          const CriaEndereco = await endereco.create({

            id_acompanhante:PegarIdCriado[0].id,
            name:PegarIdCriado[0].name,
            telefone:telefone[inicia],
            estado:'SP',
            cidade:'São Paulo',
            regiao:'SP',
            bairro:'SP',
            rua:'SP',
            numero:11,

          })




          const undergroundDB = await underground.create({

            id_acompanhante:PegarIdCriado[0].id,
            galeria:5,
            statusPagamento:'',
            statusDeEntrada:'',
            dataDeEntrada:'1980-10-10',
            pagoNaData: '1980-10-10',
            iniciaAnuncio:'1980-10-10',
            terminaAnuncio:'1980-10-10',

          })




          const CriaAcompanhante = await acompanhante.create({

            id_acompanhante:PegarIdCriado[0].id,
            username:PegarIdCriado[0].name,
            Genero:'Mulher Trans',
            valor:150,
            idade:'1984-04-01',
            OralSemCamisa:'sim',
            FinalizaOral:'sim',
            DuplaPenetracao:'sim',
            Anal:'sim',
            Grupal:'sim',
            Lesbianismo:'sim',
            ChuvaDourada:'sim',
            Filma:'sim',
            Fotografa:'sim',
            Viaja:'sim',
            descricao:'criado pelo bot',
            created_at:'2023-08-02 02:55:22',
            updated_at: '2023-08-02 02:55:22',

          })









         //download de imagens...


                // Url of the image
                const file =   fotoacomp[inicia];
                // Path at which image will get downloaded
                const filePath = `${__dirname}/public/images/`;

                download(file,filePath)

                let texto = 'thumbnails';

                let contastring = file.search('thumbnails');

                tamanhoStr = file.length;

                let entradaFotoDb = file.slice(82,tamanhoStr)






                console.log("entradaFotoDb");
                console.log(entradaFotoDb);
                console.log(entradaFotoDb);
                console.log(entradaFotoDb);

                console.log(entradaFotoDb);
                console.log(entradaFotoDb);
                console.log(entradaFotoDb);
                console.log(entradaFotoDb);


                const CriaFoto = await fotoDB.create({

                  id_acompanhante:PegarIdCriado[0].id,
                  foto:entradaFotoDb,
                  pasta:'adicionada',
                  capa:'adicionada',
                  descricao:'adicionada pelo bot',




                })


                .then(() => {
                  console.log('Download Completed');








                })















          }else{




            console.log('cadastro existente');
            console.log('cadastro existente');
            console.log('cadastro existente');
            console.log('cadastro existente');
            console.log('cadastro existente');
            console.log('cadastro existente');
            console.log('cadastro existente');

          }











      }








} catch (error) {
  console.log(error);
}


  })();
