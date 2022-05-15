<?php

function count_page($value){
    return $value+1;
}

function read(){
    $myfile = fopen('count-page.txt', "r") or die("Unable to open file!");
    $value = fread($myfile, filesize("count-page.txt"));
    return $value;
}

function write($value){
    $myfile = fopen("count-page.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $value);
    fclose($myfile);
}
write(count_page(read()));
echo read();