<?php
$mysqli = mysqli_connect('193.203.175.84', 'u638300323_Mestre', 'Mv1advdq!', 'u638300323_Laravel');



if (!$mysqli) {


die("falha na conexão".mysqli_connect_error());



}
else{

	echo 'está logado seu corno';


	$sql = "SELECT * FROM users WHERE name='TesteLixo'";


	$resultado = $mysqli->query($sql);

/*

 $inserir = "INSERT INTO users(name,email,password)VALUES('TesteLixo','TesteLixo@gmail.com','qualquercoisa')";





      $inserir = "INSERT INTO acompanhantes(username, Genero, valor, idade, OralSemCamisa, FinalizaOral, DuplaPenetracao, Anal,Grupal,Lesbianismo,ChuvaDourada,Filma,Fotografa,Viaja,descricao)VALUES ('nanai', 'Mulher', '14', '34','sim','sim','sim','sim','sim','sim','sim','sim','sim','sim','sim');";





$updb = $mysqli->query($inserir);

 */







	foreach ($resultado as $value) {


          echo  "\r\n" .$value['name'];
          echo  "\r\n" .$value['id'];




	}




}
