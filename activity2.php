<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cities</title>
    <link rel="stylesheet" href="act2.css">
</head>
<body>   
    <?php
        $cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
        function displayCities($cities) {
            echo "<ul>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
        }

        $sortedCities = $cities;
        sort($sortedCities);

        $updatedCities = array_merge($cities, ["Los Angeles", "Calcutta", "Osaka", "Beijing"]);
        sort($updatedCities);
    ?>

    <div class="container1">
        <h1>Original List of Cities</h1>
        <p><b><?php echo implode(", ", $cities); ?></b></p>
    </div>

    <div class="bottom-container">
        <div class="bcontainer">
            <h2>Original List</h2>
            <?php displayCities($cities); ?>          
        </div>

        <div class="bcontainer">
            <h2>Sorted Cities</h2>
            <?php displayCities($sortedCities); ?>
        </div>

        <div class="bcontainer">
            <h2>Updated List</h2>
            <?php displayCities($updatedCities); ?>
        </div>
    </div>

</body>
</html>


