<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCounter</title>
<style>
    body{
    background: #0d1117;
    color: white;
    font-family: sans-serif;
    }

    .form{
        margin-top: 200px;
        margin-bottom: 100px;
        display: flex;
        justify-content: center;
        text-align: center;
    }
    p{
        font-size: 18px;
        font-weight: bold;
    }

    button{
        width: 80px;
        height: 25px;
        font-weight: bold;
    }

    #result{
        font-size:18px;
        display: flex;
        justify-content: center;
    }

</style>
</head>
<body>
    <div class="form">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            
                <p>Bytes Value</p>
                <input type="text" name="bytes" required><br><br>
                <button type="submit">Count</button>
        </form>
    </div>
</body>
</html>


<?php
    $KB = 1024;
    $MB = 1024 * 1024;
    $GB = 1024 * 1024 * 1024;
    $TB = 1024 * 1024 * 1024 *1024;
    if(isset($_POST['bytes']))
    {
        $byte_value = $_POST['bytes'];
    }
    else{
        die();
    }
    
    if(is_numeric($byte_value))
    {
        if($byte_value === 0)
        {
            echo  '<p id="result">' . ' 0 bytes always be 0 bytes' . '</p>' ;
        }
        elseif($byte_value < $KB)
        {
            echo  '<p id="result">' . $byte_value . ' Bytes' . '</p>' ; //Bytes
        }
        elseif($byte_value < $MB)
        {
            echo  '<p id="result">' .  round($byte_value/$KB,2) . ' KB' .  '</p>' ; //KB
        }
        elseif($byte_value < $GB)
        {
            echo  '<p id="result">' . round($byte_value/$MB,2) .' MB'. '</p>' ; //MB
        }
        elseif($byte_value < $TB)
        {
            echo  '<p id="result">' . round($byte_value/$GB,2) . ' GB' .'</p>' ; //GB
        }
        else{
            echo '<p id="result">' . round($byte_value/$TB,2) . ' TB' .'</p>' ; //TB
        }
    }
?>