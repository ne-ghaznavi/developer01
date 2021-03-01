<?php

class View{
    static public function render($filePath, $data=array()){
        require_once ("mvc/view/" . $filePath);
    }
}

?>