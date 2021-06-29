<?php
namespace App;

abstract class Format
{
    abstract public function makeFormat():IData;

    public function takeFormat(){

        $format = $this->makeFormat();
        $format ->formatData();
    }
}