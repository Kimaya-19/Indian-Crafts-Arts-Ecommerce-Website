<?php 
// Comparing the current date with a specific date

// Get today's date
$currentDate = date("d-m-y");

// Create a specific date for comparison
$comparisonDate = date("d-m-y", strtotime("14-04-20"));

if ($currentDate > $comparisonDate) {
    echo "today is greater";
} else {
    echo "other day is great";
}

echo " today = " . $currentDate;
?>
