<?php

class Bianca {
    // Attributes
    private $mood;
    private $energyLevel;
    private $trustLevel;

    // Appearance attributes
    private $hairColor;
    private $eyeColor;
    private $height; // in centimeters
    private $style;

    // Constructor
    public function __construct(
        $mood = "happy",
        $energyLevel = 100,
        $trustLevel = 50,
        $hairColor = "brown",
        $eyeColor = "hazel",
        $height = 165,
        $style = "casual"
    ) {
        $this->mood = $mood;
        $this->energyLevel = $energyLevel;
        $this->trustLevel = $trustLevel;
        $this->hairColor = $hairColor;
        $this->eyeColor = $eyeColor;
        $this->height = $height;
        $this->style = $style;
    }

    // Method: Update mood
    public function updateMood($newMood) {
        echo "Updating mood to: $newMood\n";
        $this->mood = $newMood;
    }

    // Method: Recharge energy
    public function recharge($hours) {
        echo "Recharging energy for $hours hours...\n";
        $this->energyLevel = min(100, $this->energyLevel + ($hours * 10));
        echo "Energy level is now: {$this->energyLevel}\n";
    }

    // Method: Build trust
    public function buildTrust($effortPoints) {
        echo "Building trust with effort points: $effortPoints\n";
        $this->trustLevel = min(100, $this->trustLevel + $effortPoints);
        echo "Trust level is now: {$this->trustLevel}\n";
    }

    // Method: Compliment
    public function compliment() {
        echo "You're doing amazing, Bianca. Keep shining! 🌟\n";
        $this->updateMood("appreciated");
    }

    // Method: Describe appearance
    public function describeAppearance() {
        echo "Bianca's Appearance:\n";
        echo "Hair Color: {$this->hairColor}\n";
        echo "Eye Color: {$this->eyeColor}\n";
        echo "Height: {$this->height} cm\n";
        echo "Style: {$this->style}\n";
    }

    // Method: Get status
    public function getStatus() {
        return [
            "Mood" => $this->mood,
            "Energy Level" => $this->energyLevel,
            "Trust Level" => $this->trustLevel
        ];
    }
}

// Create an object for Bianca
$bianca = new Bianca(
    mood: "curious",
    hairColor: "black",
    eyeColor: "brown",
    height: 170,
    style: "elegant"
);

// Interacting with the object
echo "Initial Status:\n";
print_r($bianca->getStatus());

echo "\nDescribing Appearance:\n";
$bianca->describeAppearance();

$bianca->compliment();
$bianca->recharge(2);
$bianca->buildTrust(15);

echo "\nUpdated Status:\n";
print_r($bianca->getStatus());

?>
