<?php


class CRUD {

public function __construct(){

    try{

        $conn = new PDO('mysql:host=localhost;dbname=CRUD;', 'root','root');
       
    }catch(Exception $e) {
        echo'Deu merda'.$e->getMessage();
       
    }



}




        public function inserir($dados){
            
            foreach ($dados as $key => $value) {
                $dd[$key] = $value;
                $dd['deucerto'] = 'agora';
            }
            if(!empty($dd)){

                return $dd;
            }else{

            }
        }

}



$dados = $_POST;
$dados['foto'] = $_FILES['foto']['name'];

$insert = new CRUD();
$ok = $insert->inserir($dados);

echo json_encode($ok);

?>