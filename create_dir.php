<?php
$dirs = [
    "about",
    "ac-installation",
    "cooling-services",
    "heating-services",
    "maintenance-and-repair",
    "annual-inspections",
    "indoor-air-quality",
    "cold-room-nstallation",
    "refrigeration-rapair",
    "maintenance",
    "consultation"
];
foreach ($dirs as $dir) {
    if (!file_exists($dir)) {
        if (mkdir($dir)) {
            $file = $dir . "/index.php";
            file_put_contents($file, "<?php // Silence is golden");
            echo $dir . " created successfully with index.php<br>";
        }
    } else {
        echo "file exists";
    }
}
