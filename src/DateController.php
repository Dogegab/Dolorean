<?php
$presentTime = new Datetime();
$destinationTime = new Datetime();
date_timestamp_set($destinationTime, -3117535761);
$interval = $presentTime->diff($destinationTime);

?>