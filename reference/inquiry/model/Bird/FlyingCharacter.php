<?php
namespace Bird;
use \flyable;
Class FlyingCharacter implements flyable {
    public function fly()
    {
        return "Bird is self flying character";
    }
}