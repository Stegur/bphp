<?php

class JsonFileAccessModel
{
    protected $fileName;
    protected $file;

    function __construct($name)
    {
        $link = $name . '.json';
        $this->fileName = $link;
    }

    private function connect()
    {
        $this->file = fopen($this->fileName, 'w+');
    }

    private function disconnect()
    {
        fclose($this->file);
    }

    public function read()
    {
        self::connect();
        $content = fread($this->file, filesize($this->fileName));
        self::disconnect();
        return $content;
    }

    public function write($text)
    {
        self::connect();
        fwrite($this->file, $text);
        self::disconnect();
    }

    public function readJson()
    {
        self::connect();
        $content = fread($this->file, filesize($this->fileName));
        self::disconnect();
        return json_decode($content);
    }

    public function writeJson($json)
    {
        self::connect();
        fwrite($this->file, json_encode($json, JSON_PRETTY_PRINT));
        self::disconnect();
    }


}