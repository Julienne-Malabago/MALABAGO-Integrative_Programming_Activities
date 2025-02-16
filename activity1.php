<!DOCTYPE html>
<html>
<head>
    <title>Weather Conditions</title>
    <link rel="stylesheet" href="act1.css">
</head>
<body>
    
    <div class="container">
        <h1>Weather Conditions</h1>
        <?php
            $weather_conditions = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];
            
            echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had " .
                "$weather_conditions[5] and $weather_conditions[6]. Then came $weather_conditions[1] with a few " .
                "$weather_conditions[2] and some $weather_conditions[0]. At least we didn't get any " .
                "$weather_conditions[3] or $weather_conditions[4].</p>";
        ?>
    </div>    
</body>
</html>