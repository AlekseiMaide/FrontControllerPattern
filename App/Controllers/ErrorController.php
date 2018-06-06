<?php

class ErrorController
{
    public function index()
    {
    	$data["errorMessage"] = "404 PAGE NOT FOUND!";
        View::render("404", $data);
    }
}