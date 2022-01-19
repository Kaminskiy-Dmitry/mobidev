<?php

class Main
{
    public $coordinates;

    public function __construct($coordinates)
    {
        $this->coordinates = $coordinates;
    }

    public function winner(){

        $coordinates = $this->coordinates;

        switch ($coordinates){
            case $coordinates[0][0] === "X" && $coordinates[1][1] === "X" && $coordinates[2][2] === "X":
            case $coordinates[1][0] === "X" && $coordinates[1][1] === "X" && $coordinates[1][2] === "X":
            case $coordinates[2][0] === "X" && $coordinates[2][1] === "X" && $coordinates[2][2] === "X":
            case $coordinates[0][0] === "X" && $coordinates[0][1] === "X" && $coordinates[0][2] === "X":
            case $coordinates[0][2] === "X" && $coordinates[1][1] === "X" && $coordinates[2][0] === "X":
            case $coordinates[0][0] === "X" && $coordinates[1][0] === "X" && $coordinates[2][0] === "X":
            case $coordinates[0][1] === "X" && $coordinates[1][1] === "X" && $coordinates[2][1] === "X":
            case $coordinates[0][2] === "X" && $coordinates[1][2] === "X" && $coordinates[2][2] === "X":
                echo 'player X - win';
                break;
            case $coordinates[0][0] === "O" && $coordinates[1][1] === "O" && $coordinates[2][2] === "O":
            case $coordinates[1][0] === "O" && $coordinates[1][1] === "O" && $coordinates[1][2] === "O":
            case $coordinates[2][0] === "O" && $coordinates[2][1] === "O" && $coordinates[2][2] === "O":
            case $coordinates[0][0] === "O" && $coordinates[0][1] === "O" && $coordinates[0][2] === "O":
            case $coordinates[0][2] === "O" && $coordinates[1][1] === "O" && $coordinates[2][0] === "O":
            case $coordinates[0][0] === "O" && $coordinates[1][0] === "O" && $coordinates[2][0] === "O":
            case $coordinates[0][1] === "O" && $coordinates[1][1] === "O" && $coordinates[2][1] === "O":
            case $coordinates[0][2] === "O" && $coordinates[1][2] === "O" && $coordinates[2][2] === "O":
                echo 'player O - win';
                break;
            default:
                echo "''";
        }

    }

}