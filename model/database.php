<?php

//Require config file
require '/home/ctangree/config.php';

class Database
{
    private $_dbh;

    function __construct()
    {
        //Connect to database with PDO
        try {
            /*//Require config file
            $user = $_SERVER['user'];
            require_once "/home/$user/config.php";*/

            //Instantiate a database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo 'Connected to database!';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function writeCar($car)
    {
        var_dump($car);

        //Convert condiments array to a string
        $conds = $car->getCondiments();
        if (empty($conds)) {
            $conds = "";
        } else {
            $conds = implode(", ", $conds);
        }

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO food_order (food, meal, condiments)
                VALUES (:food, :meal, :condiments)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':food', $order->getFood());
        $statement->bindParam(':meal', $order->getMeal());
        $statement->bindParam(':condiments', $conds);

        //4. Execute the statement
        $statement->execute();

        //5. Process the results - SKIP
    }

    function getOrders()
    {
        //Read fro database
        //1. Define the query
        $sql = "SELECT * FROM food_order 
                ORDER BY date_time DESC";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters - SKIP

        //4. Execute the statement
        $statement->execute();

        //5. Process the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}