<?php 


class MyApp{

    public function __construct()
    {
        $this->load_system();
    }

    public function load_system()
    {
        $local_system = ['App'];
        foreach($local_system as $file)
        {
            require_once("system/core/" . $file . ".php");
            $file = new $file;
        }
    }
}

$app = new MyApp;