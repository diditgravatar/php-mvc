<?php 



class Views{

    public function view($data){
        require_once "app/views/" . $data . ".php";
    }

}