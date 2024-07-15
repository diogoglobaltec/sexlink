
const puppeteer = require('puppeteer');
const fs = require('fs');
const { isArray } = require('lodash');


   (async () => {



    const browser = await puppeteer.launch({ headless: false  },{product : "chrome" }); 
    const page = await browser.newPage();
    await page.goto('https://www.photoacompanhantes.com/acompanhantes/sao-paulo');




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


    var a =0;


    function imprime(item){

    }



    console.log(fotos.slice(9,33));




 await urls.forEach(imprime);



 















     // <input type="button" id="formulario_adulto_ok" value="Aceitar" class="boton_ancho_completo no_rgpd">

    //await page.click('input[value=Aceitar]')
    //await page.click('[id="formulario_adulto_ok"]')
    // await page.click('[type="button"]')
   //    await page.click('input[value=Aceitar')
      //verificar.click('input[type="button"]')

   //<div id="capa_configuracion_cookies"><input type="button" id="formulario_adulto_ok" value="Aceitar" class="boton_ancho_completo no_rgpd"></div>



    //const n = await page.$("#search-location")


  

   // await page.waitForTimeout(4000)

      //enter text
     // n.type("aquiiii...");
      //wait for sometime
      //await page.waitForTimeout(40000)







  
  })();