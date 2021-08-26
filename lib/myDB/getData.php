
<?php
require('connection.php');

$makeQuery = "SELECT * FROM users ";

$statement = $connection->prepare($makeQuery);

$statement->execute();

$myarray = array();

while ($resultsFrom = $statement ->fetch()){

    array_push(
        $myarray,array(
            "username"=>$resultsFrom['username'],
            "first_name"=>$resultsFrom['first_name'],
            "last_name"=>$resultsFrom['last_name'],
            "date_of_birth"=>$resultsFrom['date_of_birth'],
            "password"=>$resultsFrom['password']
        )
    );
}

echo json_encode($myarray);

?>