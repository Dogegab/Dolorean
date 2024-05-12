<?php
require '../src/DateController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<main>
    <h1>Retour vers le futur Quête</h1>
    <ul>
        <li class="destination"> 
            <div class="dateData">
                <h3> Month </h3> 
                <p><?php echo $destinationTime->format('M');?></p>
            </div>
            <div class="dateData">
                <h3> Day </h3> 
                <p><?php echo $destinationTime->format('d');?></p>
            </div>
            <div class="dateData">
                <h3> Year </h3> 
                <p><?php echo $destinationTime->format('Y');?></p>
            </div>
            <?php if ($destinationTime->format('A') === 'AM') {
                    echo '<div class="switchAM">
                    <h7>AM</h7>
                    <input name="chkBox_ONN" type="checkbox" disabled="disabled" checked class="switchON"/>
                    <label for="chkBox_ON"></label>
                    <h7>PM</h7>
                    <input name="chkBox_OFF" type="checkbox" disabled="disabled" />
                    <label for="chkBox_OFF"></label>';
            
                } else {
                    echo '<div class="switchPM">
                    <h7>AM</h7>
                    <input name="chkBox_OFF" type="checkbox" />
                    <label for="chkBox_OFF"></label>
                    <h7>PM</h7>
                    <input name="chkBox_ONN" type="checkbox" checked/>
                    <label for="chkBox_ON"></label>';
                }
                ?>
            </div>
            <div class="dateData">
                <h3> Hour </h3> 
                <p><?php echo $destinationTime->format('h');?></p>
            </div>
            <div class="dateData">
                <h3> Min </h3> 
                <p><?php echo $destinationTime->format('i');?></p>
            </div>
            </div>
        </li>
        <h2>Destination Time</h2>
        <li class="present"> 
            <div class="dateData">
                <h3> Month </h3> 
                <p><?php echo $presentTime->format('M');?></p>
            </div>
            <div class="dateData">
                <h3> Day </h3> 
                <p><?php echo $presentTime->format('d');?></p>
            </div>
            <div class="dateData">
                <h3> Year </h3> 
                <p><?php echo $presentTime->format('Y');?></p>
            </div>
            <?php if ($presentTime->format('A') === 'AM') {
                    echo '<div class="switchAM">
                    <h7>AM</h7>
                    <input name="chkBox_ONN" type="checkbox" disabled="disabled" checked class="switchON"/>
                    <label for="chkBox_ON"></label>
                    <h7>PM</h7>
                    <input name="chkBox_OFF" type="checkbox" disabled="disabled" />
                    <label for="chkBox_OFF"></label>';
            
                } else {
                    echo '<div class="switchPM">
                    <h7>AM</h7>
                    <input name="chkBox_OFF" type="checkbox" disabled="disabled" />
                    <label for="chkBox_OFF"></label>
                    <h7>PM</h7>
                    <input name="chkBox_ONN" type="checkbox" disabled="disabled" checked class="switchON"/>
                    <label for="chkBox_ON"></label>';
                }
                ?>
            </div>
            <div class="dateData">
                <h3> Hour </h3> 
                <p><?php echo $presentTime->format('h');?></p>
            </div>
            <div class="dateData">
                <h3> Min </h3> 
                <p><?php echo $presentTime->format('i');?></p>
            </div>
            </div>
        </li>
        <h2>Present Time</h2>
    </ul>
    <h3>Intervalle</h3>
    <?php echo $interval->format('%Y années, %m mois, %d jours, %H heures, %i minutes, %s secondes') ?>
</main>
</body>
</html>