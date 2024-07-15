 

const qrcode = require('qrcode-terminal');

const { Client } = require('whatsapp-web.js');
const client = new Client();

client.on('qr', qr => {
    qrcode.generate(qr, {small: true});
});

client.on('ready', () => {
    console.log('Client is ready!');
});

client.initialize();














client.on('ready', () => {
    console.log('Client is ready!');



    
   
     // Your message.
    const text = "Olá como vai você ??? Este é um convite meu para você ir conhecer o bairro da liberdade em são paulo, dê uma olhada em www.rodandoanet.blogspot.com alguns restaurante bem escondidos e interessantes neste bairro vai lá dê uma olhada e bom divertimento !!";
   
 
   
    // Sending message.
    
    var a = 1000;
    var b = 1;




    

    function displayHello() {


        b = a++
        console.log(b)


            // Number where you want to send the message.
    const number = "+551195076";
    const enviar = "7142";

        
    // Getting chatId from the number.
     // we have to delete "+" from the beginning and add "@c.us" at the end of the number.
     const chatId = number.substring(1)+b+ "@c.us";


     console.log(chatId)


     
        


        client.sendMessage(chatId, text);

      }


   

      setInterval(displayHello, 5000);




   });

 


 



 

 