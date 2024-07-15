const qrcode = require('qrcode-terminal');
const puppeteer = require('puppeteer');



const { Client } = require('c.js');
const client = new Client();

client.on('qr', qr => {
    qrcode.generate(qr, {small: true});
});

client.on('ready', () => {
    console.log('Client is ready!');


 
    




});

client.initialize();


 

 


