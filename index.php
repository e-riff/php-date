<?php
$presentTime = new DateTime;
$destinationTimeStr = "03-08-1989 13:10";
$destinationTime = DateTime::CreateFromFormat("d-m-Y G:i", $destinationTimeStr);

$difference = $presentTime->diff($destinationTime);

$diffInMinutes = ($difference->format("%a") * 60 * 24) + ($difference->format("%h") * 60) + ($difference->format("%i"));
$carburant = intdiv($diffInMinutes, 10000);

//present
$pMonth = strtoupper($presentTime->format("M"));
$pDay = strtoupper($presentTime->format("j"));
$pYear = strtoupper($presentTime->format("Y"));
$pAmPm = strtoupper($presentTime->format("A"));
$pHour = strtoupper($presentTime->format("h"));
$pMin = strtoupper($presentTime->format("i"));

//Destination
$dMonth = strtoupper($destinationTime->format("M"));
$dDay = strtoupper($destinationTime->format("j"));
$dYear = strtoupper($destinationTime->format("Y"));
$dAmPm = strtoupper($destinationTime->format("A"));
$dHour = strtoupper($destinationTime->format("h"));
$dMin = strtoupper($destinationTime->format("i"));

//Difference
$diMonth = strtoupper($difference->format("%M"));
$diDay = strtoupper($difference->format("%d"));
$diYear = strtoupper($difference->format("%Y"));
$diAmPm = strtoupper($difference->format("%A"));
$diHour = strtoupper($difference->format("%h"));
$diMin = strtoupper($difference->format("%i"));

//Version simple
/*
        <h1> Present time :</h1>
        <p><?= strtoupper($presentTime->format("M j Y A h:i")) ?></p>
        <h1> Destination time :</h1>
        <p> <?= strtoupper($destinationTime->format("M j Y A h:i")) ?></p>
        <h1> Difference :</h1>
        <p> <?= strtoupper($difference->format("%Y years, %M Months, %d days and %h:%i hour(s)")) ?></p>
        */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>date date date</title>
</head>

<body>
    <section class=clock>

        <p class="destination dMonth"><?= $dMonth ?></p>
        <p class="destination dDay"><?= $dDay ?></p>
        <p class="destination dYear"><?= $dYear ?></p>
        <p class="destination dMonth"><?= $dMonth ?></p>
        <div class="destination dAm">
            <?php echo $dAmPm == "AM" ? "<img src='/am.webp'/>" : ""; ?></div>
        <div class="destination dPm">
            <?php echo ($dAmPm == "PM") ? "<img src='/pm.webp'/>" : ""; ?></div>
        <p class="destination dHour"><?= $dHour ?></p>
        <p class="destination dMin"><?= $dMin ?></p>

        <p class="present pMonth"><?= $pMonth ?></p>
        <p class="present pDay"><?= $pDay ?></p>
        <p class="present pYear"><?= $pYear ?></p>
        <p class="present pMonth"><?= $pMonth ?></p>
        <div class="present pAm">
            <?php echo $pAmPm == "AM" ? "<img src='/am.webp'/>" : ""; ?></div>
        <div class="present pPm">
            <?php echo ($pAmPm == "PM") ? "<img src='/pm.webp'/>" : ""; ?></div>
        <p class="present pHour"><?= $pHour ?></p>
        <p class="present pMin"><?= $pMin ?></p>

        <p class="difference diMonth"><?= $diMonth ?></p>
        <p class="difference diDay"><?= $diDay ?></p>
        <p class="difference diYear"><?= $diYear ?></p>
        <p class="difference diMonth"><?= $diMonth ?></p>
        <p class="difference diHour"><?= $diHour ?></p>
        <p class="difference diMin"><?= $diMin ?></p>
    </section>
    <h1> <?= "Carburant : $carburant"  ?></h1>
    <figure>
        <figcaption>La route ?</figcaption>
        <audio controls src="/laroute.mp3" autoplay="true">
            <a href="/laroute.mp3">
                Download audio
            </a>
        </audio>
    </figure>
</body>