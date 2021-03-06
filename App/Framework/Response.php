<?php

class Response 
{

    public function __construct($version) 
    {
        $this->version = $version;
    }

    public function getVersion() 
    {
        return $this->version;
    }

    public function addHeader($header) 
    {
        $this->headers[] = $header;
        return $this;
    }

    public function addHeaders(array $headers) 
    {
        foreach ($headers as $header) 
        {
            $this->addHeader($header);
        }
        return $this;
    }

    public function getHeaders() 
    {
        return $this->headers;
    }

    public function send() 
    {
        ob_start();
        if (!headers_sent()) 
        {
            foreach($this->getHeaders() as $header) 
            {
                header($header."\n");
            }
        }
        ob_end_flush();
    }
}