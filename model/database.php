<?php
//echo "<pre>";
//var_dump($_SERVER);
//echo "</pre>";

//Require config file
require '/home/ctangree/config.php';


class Database
{
    private $_dbh;

    function __construct()
    {
        //Connect to database with PDO
        try {

            //Instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo 'Connected to database!';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function writeCar($car)
    {
        var_dump($car);

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO PersonalInfo (LastName, FirstName, Phone, Email)
                VALUES (:LastName, :FirstName, :Phone, :Email)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':LastName', $car->getLName());
        $statement->bindParam(':FirstName', $car->getFName());
        $statement->bindParam(':Phone', $car->getPhone());
        $statement->bindParam(':Email', $car->getEmail());

        //4. Execute the statement
        $statement->execute();

        //5. Process the results - SKIP
    }
//
//    function getOrders()
//    {
//        //Read fro database
//        //1. Define the query
//        $sql = "SELECT * FROM food_order
//                ORDER BY date_time DESC";
//
//        //2. Prepare the statement
//        $statement = $this->_dbh->prepare($sql);
//
//        //3. Bind the parameters - SKIP
//
//        //4. Execute the statement
//        $statement->execute();
//
//        //5. Process the results
//        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//    }
}