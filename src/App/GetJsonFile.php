<?php
namespace App;

class GetJsonFile extends Format
{
    public function makeFormat(): IData
    {
        return new JsonFile();
    }
}