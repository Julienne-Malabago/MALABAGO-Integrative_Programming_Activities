<!DOCTYPE html>
<html>
<head>
    <title>Weather Conditions</title>
    <style>
        body
        {
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center; 
            vertical-align: center;
            text-align: justify; 
            height: 100vh;
            
            background-image: url("https://img.freepik.com/premium-photo/beautiful-sunset-sky-with-pink-blue-orange-colors-clouds-are-fluffy-look-like-cotton-candy-sky-is-bright-full-light_14117-54391.jpg");
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed;

            font-size: 2rem;
        
        }

        h1
        {
            font-size: 5rem;
            color: white;
            text-shadow: 
            -1px -1px 0 purple,  
            1px -1px 0 purple,
            -1px  1px 0 purple,
            1px  1px 0 purple;
        }

        .container
        {
            background-color: rgba(255, 209, 223, 0.7);
            padding: 5rem;
            width: 70%;
            border-radius: 5rem;
        }

    </style>
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