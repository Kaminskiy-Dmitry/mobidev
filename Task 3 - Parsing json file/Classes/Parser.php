<?php

class Parser
{
    public $ourData;

    public function __construct($ourData)
    {
        $this->ourData = $ourData;
    }

    public function parser() {

        $json_array = json_decode($this->ourData, true);

        foreach ($json_array as $key => $value) {
            echo '- ' . $key . '<br>';
            if (is_array($value)) {
                foreach ($value as $k => $v)
                    if (is_array($v)) {
                        echo '-- ' . $k . '<br>';
                        foreach ($v as $name => $option) {
                            if (is_array($option)) {
                                echo '--- ' . $name . '<br>';
                                foreach ($option as $val) {
                                    echo '---- ' . $val . '<br>';
                                }
                            } else {
                                echo '--- ' . $option . '<br>';
                            }
                        }
                    } else {
                        echo '-- ' . $v . '<br>';
                    }
            }
        }

    }

}