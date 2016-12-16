<?php
$random =array( 'naam1'=>"Jeroen",
                'naam2'=>"Tim",
                'naam3'=>"Peter",
                'naam4'=>"Angela",
                'naam5'=>"Henk",
                'naam6'=>"Diana",
                'naam7'=>"Ria",
                'naam8'=>"Robin");


asort($random);

$temp = 1;
while($temp <= 8){
    foreach($random as $key => $value) {
        echo " $temp: $key - $value".'<br/>';
        $temp++;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

    </style>

</head>
<body>
<?php
?>
</body>

</html>

