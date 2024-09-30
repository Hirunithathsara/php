<!doctype html>
<html lang="en">
    <head>
        <meta charset=" UTF-8">
        <title>Php</title>

    </head>  
    <body>
        <h1>
            <?php
           $books=[
            "Do Androidas dream of Electric Shaap",
            "The Langollers",
            "Hail Mary"
           ];
           
            ?>

            <ul>

            <?php foreach($books as $bok){
                echo"<li>".$book."<li>";
            }
            </ul>
        </h1>
    </body>  

 </html>   