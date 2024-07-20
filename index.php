<?php 


class MyApp{

    public function __construct()
    {
        $this->load_system();
    }


    public function __libraries()
    {
        $files = ['Database', 'Helper', 'Model'];

        foreach($files as $file){
            require_once "system/libraries/" . $file . ".php";
            $file = new $file;
        }
    }

    public function load_system()
    {
        $local_system = ['Views', 'Controller', 'App'];
        foreach($local_system as $file)
        {
            require_once("system/core/" . $file . ".php");
            $file = new $file;
        }
    }
}

$app = new MyApp;