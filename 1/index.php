<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        img{
            width:100%;
        }
        .col{
            width:10%;
            border:1px solid black;
            margin:1%;
            /* background-color:black; */
        }
        .row{
            margin:3%;
        }
    </style>
</head>
<body>
    <?php 
        $link = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";    
        $response = file_get_contents($link);
        $result = json_decode($response);
        echo "<div class=\"container\">";
        for($i=0 ; $i<count($result->tracks->items) ; $i++){
            if($i % 3 == 0){
                echo "<div class=\"row\">";
            }
                echo "<div class=\"col\">";
                    echo "<img src=\"https://i.scdn.co/image/ab67616d0000b27363c1c52648d4bda3281288e5\">"; 
                    echo "<br>";
                    echo $result->tracks->items[$i]->name . "<br>";
                    echo $result->tracks->items[$i]->artists[0]->name . "<br>";
                    echo count($result->tracks->items[$i]->available_markets) . "<br>";
                echo "</div>";
            if(($i+1) % 3 == 0){
                echo "</div>";
            }
        }
        echo "</div>";
    ?>
</body>
</html>