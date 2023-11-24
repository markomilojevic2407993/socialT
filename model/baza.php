<?php

$baza = mysqli_connect('localhost', 'root', '', 'socialt');

function escape($string)
{
    global $baza;

    return mysqli_real_escape_string($baza, $string);
}
function query($query)
{
    global $baza;

    return mysqli_query($baza, $query);
}
function confirm($result)
{
    global $baza;
    if (!$result) {
        exit('Problem width localhost').mysqli_error($baza);
    }
}
