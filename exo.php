<?php

function helloArray($user) {
    var_dump("Hello " . $user["firstname"] . " "  . $user["lastname"]);
}

helloArray($person);