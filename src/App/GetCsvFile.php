<?php
namespace App;

class GetCsvFile extends Format
 {
     public function makeFormat(): IData
     {
         return new CsvFile();
     }
 }