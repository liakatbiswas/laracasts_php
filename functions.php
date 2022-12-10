<?php

// Dump and Die
function dd($value)
{
 echo "<pre>";
//  var_dump([$value]);
 print_r($value);
 echo "</pre>";

 die();
}

function urlIs($value)
{
 return $_SERVER['REQUEST_URI'] === $value;
}