<?php
$contact= "+255748031220";
switch($contact){
    case strlen($contact) >13 || strlen($contact) <13:
    echo "Invalid" . "<br>";

    case strlen($contact) ==13:
    echo "Valid" . "<br>";
}


switch($contact){
    case substr($contact,0,4) == +254:
    echo "Kenya";
    break;

    case substr($contact,0,4) == +255:
    echo "Tanzania";
    break;
    
    case substr($contact,0,4) == +256:
    echo "Uganda";
    break;   

    case substr($contact,0,4) == +257:
    echo "Rwanda";
    break;

    default:
    echo "input a valid contact";
}
?>