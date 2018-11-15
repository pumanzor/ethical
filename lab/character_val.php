<?php


$data = "a_sdf.-A999";

if(preg_match('/^[a-zA-Z0-9._-]*$/',$data)){
	    echo 'contiene caracteres';
} else {
	    echo 'contiene caracteres invalidos';
}

?>
