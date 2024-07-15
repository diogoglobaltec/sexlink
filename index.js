(async () => {
    const database = require('./db');
    const Deposito = require('./depositos');
 
    try {
        const resultado = await database.sync();
        console.log(resultado);
        console.log('aqui estou mais um dia............')

            
        const resultadoCreate = await Deposito.create({
            nome: 'mouse',
           
 
          
        })
        console.log(resultadoCreate);





    } catch (error) {
        console.log(error);
    }
})();