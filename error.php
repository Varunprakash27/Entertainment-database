<html>
<head>
    <h1>--ERROR--</h1>
    <style>
        body
        {
         background-image:url("https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77700327180.jpg"); 
         text-align:center;
         color: white;
        }
        h1
        {
            font-family:cursive;
           font-size:4vw;
        }
        h2
        {
            font-family:cursive;
           font-size:4vw;
            margin-top:30vh;
        }
    </style>
</head>
<body>
        <?php

       if($_SESSION['v']==1)
        {
            ?>
            <h2>Name cannot be empty..</h2>
            <?php
        }
        if($_SESSION['v']==2)
        {
            ?>
            <h2>Email cannot be empty..</h2>
            <?php
        }
        ?>
</body>
</html>