<!-- multidimensional array -->

<?php


$students = array(
    array(
        "age" => 20,
        "grade" => "A",
        "subjects" => "Math"
    ),
     array(
        "age" => 22,
        "grade" => "B",
        "subjects" => "History",
    ),
     array(
        "age" => 21,
        "grade" => "C",
        "subjects" =>  "Chemistry"
    )
);



foreach ($students as $name=>$value){
    foreach($value as $v => $v1){
        echo $v . "=>" . $v1 . "<br>";
    }
}

?>