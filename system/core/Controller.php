<?php 


class Controller extends Views
{

    protected $load;

    protected $db;

    public function __construct()
    {

        $this->load = new Views;
    }
}