<?php
$runder = 12;

if(empty($_POST['round']))
{
    echo 'N 66 14.666<br> E011 12.543';
    die();
}

if(count($_POST['sequence']) != $runder)
{
    echo 'N 66 14.666<br> E011 12.543';
    die();
}

if($_POST['round'] != $runder)
{
    echo 'N 66 14.666<br> E011 12.543';
    die();
}

 echo 'N 60 12.121<br> E011 52.077';  
 die();

?>