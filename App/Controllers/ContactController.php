<?php

class ContactController
{
    public function index(Request $request, Response $response)
    {
    	View::render("home", Contact::all());
    }

    public function show(Request $request, Response $response, $id)
    {
        //Takes id of the contact to show.
        echo "Invoked function to show single contact.";
    }

    public function create(Request $request, Response $response)
    {
    	if ($request->method === "POST")
    	{
    		//Sanitize?

    		//Save the data.
            Contact::create($request->params);

            $response->addHeader(
                "Location:http://" . $_SERVER['SERVER_NAME']."/")->send();
            exit();
    	}

        View::render("create");
    }
}