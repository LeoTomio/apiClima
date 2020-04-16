<?php

class acesso{

    public function novoAcesso(){
        file_put_contents("./cache/acesso.txt", (int) file_get_contents('./cache/acesso.txt') + 1);      
    }
     public function getAcesso (){
         return file_get_contents("./cache/acesso.txt");
     }
}
?>

