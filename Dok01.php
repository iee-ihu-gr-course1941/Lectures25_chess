<?php
$person = array(
    "name" => "John",
    "age" => 30,
    "hobbies" => array("reading", "hiking")
);

// Έξοδος του print_r($person);
/*
Array
(
    [name] => John
    [age] => 30
    [hobbies] => Array
        (
            [0] => reading
            [1] => hiking
        )
)
*/
print_r($person);
?>