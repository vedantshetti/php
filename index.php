<?php 

$employees=array(
    "vedant" => "app developer",
    "siddharth" => "web developer",
    "sahil" => "data scientist",
    "sachin" => "android developer",
    "saurabh" => "ios developer",
);
?>


<?php 
foreach($employees as $e=>$value ) {
    ?>


<p> <b><?php echo $e?>:</b><?php echo $value ?></p>

<?php } ?>