<?php

class Core{
    public function run(){
        $url = '/';
        $params = array();

        if(isset($_GET['url'])){
            $url .= htmlspecialchars($_GET['url']);  
        }
       
        if (!empty($url) && $url !='/') {
            #separando URL
            $url = explode("/",$url);
            array_shift($url);
            $AtualController = strtolower($url[0]).'Controller';
            array_shift($url);
            if (isset($url[0]) && !empty($url[0])) {
                # code...
                $AtualAction = strtolower($url[0]);
                array_shift($url);
            }else{
                $AtualAction = 'index'; 
            }

            if (count($url) > 0) {
                # parâmetros
                $params = $url[0];
            }else{

            }
            
        }else{
            $AtualController = 'homeController';
            $AtualAction     = 'index';
        }

        $controller = new $AtualController();
        call_user_func_array(array($controller,$AtualAction),$params);
        
    }
}