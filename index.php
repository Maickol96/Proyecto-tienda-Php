<?php
/*Controlador frontal -> se encarga de recojer parametros get por la url y ver a que controlador pertenece cargar ese archivo o objeto y luego llamar al metodo correspondiente*/

require_once 'autoload.php';//cargamos el archivo de autoload para tener acceso a todos los controllers

//Compruebo su me llega me llega el controller por la url
if (isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller']. "Controller";
}else{
    echo "La pagina que busca no existe";
    exit();
}


//Compruebo si existe el controller -> si existe esa clase
if(class_exists($nombre_controlador)){//en caso de que exista esa clase creo el objeto
    $controller = new $nombre_controlador();

    //Compruebo si me llega la accion y si el metodo existe dentro del controllers
    if (isset($_GET['action'])){
        $action = $_GET['action'];//en caso de que si lo que hago es invocar ese metodo
        $controller->$action();

    }else{
        echo "La pagina que busca no existe";
    }
}else{
    echo "La pagina que busca no existe";
}