<?php

class View{
    static public function render($filePath, $data=array()){
        ob_start();
        require_once ("mvc/view/" . $filePath);
        $content = ob_get_clean();

        require_once ("theme/user.php");
    }

    static public function renderHome($filePath, $data=array()){
        require_once ("mvc/view/" . $filePath);
    }
}

?>