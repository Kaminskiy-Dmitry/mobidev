<?php

    require_once ('Classes/FormatItem.php');

    function getData()
    {
        $data = new FormatItem();
        $data->number = $_POST;

        return $data->formatItem();
    }

