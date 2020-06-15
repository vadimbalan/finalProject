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

    function writeInfo($info)
    {
        //var_dump($info);

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO PersonalInfo (LastName, FirstName, Phone, Email)
                VALUES (:LastName, :FirstName, :Phone, :Email)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':LastName', $info->getLName());
        $statement->bindParam(':FirstName', $info->getFName());
        $statement->bindParam(':Phone', $info->getPhone());
        $statement->bindParam(':Email', $info->getEmail());

        //4. Execute the statement
        $statement->execute();

        //5. Process the results - SKIP
    }

    function writeCar($car)
    {
        //var_dump($car);

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO BMWMake (Model, Year, DriveTrain)
                VALUES (:Model, :Year, :DriveTrain)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':Model', $car->getModel());
        $statement->bindParam(':Year', $car->getYear());
        $statement->bindParam(':DriveTrain', $car->getDriveTrain());

        //4. Execute the statement
        $statement->execute();

        //5. Process the results - SKIP
    }

    function writeExterior($exterior)
    {

        //Write to database
        //1. Define the query
        $sql = "INSERT INTO BMWExterior(Rim_size, Spinner, Color, Exhaust, Engine, Transmission, Addition)
                VALUES (:Rim_size, :Spinner, :Color, :Exhaust, :Engine, :Transmission, :Addition)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':Rim_size', $exterior->getRim());
        $statement->bindParam(':Spinner', $exterior->getSpinners());
        $statement->bindParam(':Color', $exterior->getColor());
        $statement->bindParam(':Exhaust', $exterior->getExhaust());
        $statement->bindParam(':Engine', $exterior->getEngine());
        $statement->bindParam(':Transmission', $exterior->getTransmission());
        $statement->bindParam(':Addition', $exterior->getExterior());

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