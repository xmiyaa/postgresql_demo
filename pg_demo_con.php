<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <title>Data</title> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $connection = pg_connect("host=localhost dbname=pg-demo user=postgres password=109899"); 
    if (!$connection){
        echo "an error has occurred.<br>";
        exit;
    }
    $result = pg_query($connection, "SELECT * FROM users");
    if (!$result){
        echo "an error has occurred.<br>";
        exit;
    }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>

        <?php
        while($row = pg_fetch_assoc($result)){
            echo"
            <tr>
                <td>$row[id]</td>
                <td>$row[username]</td>
                <td>$row[email]</td>
            </tr>
            ";
        }
        ?>

    </table>
</body>

</html> 

