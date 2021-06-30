<?php
namespace App;

abstract class Format
{
    //фабричный метод
    abstract public function makeFormat():IData;

    public function takeFormat(){

        $format = $this->makeFormat();
        $format ->formatData();
    }
}