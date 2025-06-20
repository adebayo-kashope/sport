



<?php

// Sports class with properties
class Sports {
    public $teamSize;
    public $equipment;
    public $duration;

    // A method to display the information
    public function showInfo() {
        echo "Team Size: " . $this->teamSize . "<br>";
        echo "Equipment: " . $this->equipment . "<br>";
        echo "Duration: " . $this->duration . " minutes<br><br>";
    }
}

// Create a Football object
$football = new Sports();
$football->teamSize = 11;
$football->equipment = "Football";
$football->duration = 90;

echo "<h3>Football Info</h3>";
$football->showInfo();

// Create a Basketball object
$basketball = new Sports();
$basketball->teamSize = 5;
$basketball->equipment = "Basketball";
$basketball->duration = 48;

echo "<h3>Basketball Info</h3>";
$basketball->showInfo();

?>
