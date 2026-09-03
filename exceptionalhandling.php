<?php

try {

    $age = 15;

    if ($age < 18) {

        throw new Exception("You must be 18 or older.");

    }

    echo "You are eligible.";

} catch (Exception $e) {

    echo "Error: " . $e->getMessage();

} finally {

    echo "<br>Process completed.";

}