
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myfile</title>
    <style> 
        body{
            background:pink;
        }
    </style>
</head>
<body>
        <h1> Welcome to my first PHP file </h1> 
        <?php  
        
            echo  "hii\n";
            echo "need new line </br>";
            echo "php code is executed on the server and
            the server returns with plain text (html, css, js)";
        

            echo "<h1 style='color:red'> My name is Noha, I works at iti </h1>";
            // this is  a comment 
            /**
             * this is a comment 
             */
            # this is a comment in php

            
        
        ?> 
       
       <h1> Go Dynamic --> display time from server </h1> 
       <?php 

        echo "<p>Now, Its ";
        echo date('H:i , jS F Y');
        echo "</p>";
?>
       
       <!-- <script> 
    
            alert("hello world")
            console.log("hiii")
        </script> -->
        <!-- <script src='myscript.js'></script> -->
</body>
</html>