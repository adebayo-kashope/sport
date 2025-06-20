<?php

// Parent class called Sports
class Sports {
    public $teamSize;
    public $equipment;
    public $duration;

    // Constructor to set the values
    public function __construct($teamSize, $equipment, $duration) {
        $this->teamSize = $teamSize;
        $this->equipment = $equipment;
        $this->duration = $duration;
    }

    // A function to show info
    public function showInfo() {
        echo "Team Size: " . $this->teamSize . "<br>";
        echo "Equipment: " . $this->equipment . "<br>";
        echo "Duration: " . $this->duration . " minutes<br>";
    }
}

// Football is a child class of Sports
class Football extends Sports {
    public function __construct() {
        // Call the parent class constructor
        parent::__construct(11, "Football", 90);
    }
}

// Basketball is a child class of Sports
class Basketball extends Sports {
    public function __construct() {
        // Call the parent class constructor
        parent::__construct(5, "Basketball", 48);
    }
}

// Create a Football object
$football = new Football();
echo "<h3>Football Info</h3>";
$football->showInfo();

// Create a Basketball object
$basketball = new Basketball();
echo "<h3>Basketball Info</h3>";
$basketball->showInfo();

?>