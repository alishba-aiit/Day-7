<?php

try {

    throw new Exception("User not found.", 404);

} catch (Exception $e) {

    echo "Message: " . $e->getMessage();
    echo "<br>";

    echo "Code: " . $e->getCode();
    echo "<br>";

    echo "File: " . $e->getFile();
    echo "<br>";

    echo "Line: " . $e->getLine();

}