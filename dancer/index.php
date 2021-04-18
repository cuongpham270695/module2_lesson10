<?php
include_once "dancer.php";

$dancerMale1 = new Dancer("Johns", "male");
$dancerMale2 = new Dancer("Nathan", "male");
$dancerMale3 = new Dancer("Alex", "male");
$dancerMale4 = new Dancer("Tim", "male");
$dancerFemale1 = new Dancer("Natalie", "female");
$dancerFemale2 = new Dancer("Jane", "female");
$dancerFemale3 = new Dancer("Amber", "female");
$dancerFemale4 = new Dancer("Athena","female");
$dancerFemale5 = new Dancer("Jennifer","female");
$dancerFemale6 = new Dancer("Hannah","female");
$dancerMale = new SplQueue();
$dancerMale->enqueue($dancerMale1);
$dancerMale->enqueue($dancerMale2);
$dancerMale->enqueue($dancerMale3);
$dancerMale->enqueue($dancerMale4);
$dancerFemale = new SplQueue();
$dancerFemale->enqueue($dancerFemale1);
$dancerFemale->enqueue($dancerFemale2);
$dancerFemale->enqueue($dancerFemale3);
$dancerFemale->enqueue($dancerFemale4);
$dancerFemale->enqueue($dancerFemale5);
$dancerFemale->enqueue($dancerFemale6);
$countMale = count($dancerMale);
$countFemale = count($dancerFemale);
while ($dancerMale->isEmpty() == false || $dancerFemale->isEmpty() == false) {
    echo $dancerMale->dequeue()->name . " dance with " . $dancerFemale->dequeue()->name . "<br>";
    if ($dancerMale->isEmpty() == true) {
        echo "Female dancer waiting for someone ^^";
    }
    if ($dancerFemale->isEmpty() == true) {
        echo "Male dancer waiting for someone ^^";
    }
}