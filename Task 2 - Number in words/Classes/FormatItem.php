<?php

class FormatItem
{

    public $number;

    public function formatItem(){

        if (!empty($this->number['number'])) {
            return (new NumberFormatter("en", NumberFormatter::SPELLOUT))->format($this->number['number']);
        } else {
           echo 'Please input correct number';
        }

    }
}