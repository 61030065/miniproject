<?php

$notes = array(array("noteDate" => "20-03-2021", "notes" =>
array(
    array("name" => "eat1", "detail" => "eat ice cream"),
    array("name" => "eat2", "detail" => "eat ice cream"),
    array("name" => "eat3", "detail" => "eat ice cream")
)));
array_push($notes, array("noteDate" => "21-03-2021", "notes" =>
array(
    array("name" => "eat", "detail" => "eat ice cream")
)));
array_push($notes, array("noteDate" => "22-03-2021", "notes" =>
array(
    array("name" => "eat", "detail" => "eat ice cream"),
)));
array_push($notes, array("noteDate" => "23-03-2021", "notes" =>
array(
    array("name" => "eat", "detail" => "eat ice cream"),
    array("name" => "eat", "detail" => "eat ice cream"),
    array("name" => "eat", "detail" => "eat ice cream")
)));
echo json_encode($notes, JSON_UNESCAPED_UNICODE);
