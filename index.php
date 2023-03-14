<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starts Rating</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <style>
        .stars-container{
            width: 150px;
            height: 30px;
            background-color: white;
            position: relative;
        }
        .stars-container img{
            float: left;
        }  
        .stars-container .stars{
            position: absolute;
        }   
        .stars-container .fill-container{
            /* width: 100%; */
            height: 100%;
            background-color: #E3BA49;
            position: absolute;
        }
    </style>
    <?php
    
        $rating = "49%";
    
    ?>
    <div class="stars-container">
        <div class="fill-container" style="width:<?=$rating?>;"></div>
        <div class="stars">
            <?php for($i = 1; $i <= 5; $i++){ ?>
                <img src="starpng.png"  width="30" alt="">
            <?php } ?>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    </script>
</body>

</html>