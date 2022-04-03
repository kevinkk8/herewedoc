<?php function loadDB(){
    return new PDO("mysql:host=localhost;dbname=herewedoc_db","root", "");
}

?>