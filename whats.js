//Puppeteer library
require('qrcode-terminal');
const pt = require('puppeteer')
pt.launch({ headless: false }).then(async browser => {
   //browser new page
   const page = await browser.newPage()
   //monitor requests
   await page.setRequestInterception(true)
   //check resourceType is script
   page.on('request', request => {
      if (request.resourceType() === 'script')
         request.abort();
      else
         request.continue();
   })







   await page.setUserAgent('Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0');

   //launch application
   await page.goto('https://api.whatsapp.com/send?phone=555511946281251&text=testando%20porra')
   //browser close






   console.log("estamos aqui....")


   await page.click("a[id='action-button']")






















})