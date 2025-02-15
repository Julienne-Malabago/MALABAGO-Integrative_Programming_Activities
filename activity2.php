<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cities</title>
    <style>
        body 
        {
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center;
            text-align: justify; 
            margin: 0;
            padding: 0;
            
            background-image: url("https://cdna.artstation.com/p/assets/images/images/046/625/172/large/tiago-sousa-chobani01-v2.jpg?1645638420");
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed;

            font-size: 1.5rem;
            color: #103a00;
        }

        h1
        {
            font-size: 5rem;
            color: white;
            text-shadow: 
            -2px -2px 0 #103a00,  
            2px -2px 0 #103a00,
            -2px  2px 0 #103a00,
            2px  2px 0 #103a00;
        }

        .container1, .bottom-container {
            background-color: rgba(232, 251, 213, 0.7);
            padding: 3rem;
            width: 70%;
            border-radius: 3rem;
            text-align: center;
            margin: 5rem 0rem;
        }

        .bottom-container {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
        }

        .bcontainer1, .bcontainer2 , .bcontainer3{
            background-color: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            flex: 1;
            border-radius: 2rem;
            text-align: center;
        }

        ul 
        {
            text-align: left;
        }

    </style>
</head>
<body>

    <div class="container1">
        <h1>Original List of Cities</h1>
        <p><b>
            <?php
                $cities = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
                echo implode(", ", $cities);
            ?>
        </b></p>
    </div>

    <div class="bottom-container">
        <div class="bcontainer1">
            <h2>Original List</h2>
            <ul>
                <?php
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>            
        </div>

        <div class="bcontainer2">
            <h2>Sorted Cities</h2>
            <ul>
                <?php
                    sort($cities);
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>
        </div>

        <div class="bcontainer3">
            <h2>Updated List</h2>
            <ul>
                <?php
                    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
                    sort($cities);
                    foreach ($cities as $city) {
                        echo "<li>$city</li>";
                    }
                ?>
            </ul>
        </div>
    </div>

</body>
</html>
