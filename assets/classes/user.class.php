<?php

class user{

    // add the database links - for its connected with this.
    var $servername = "localhost";
    var $dbname = "root";
    var $dbpass = "root";
    var $db = "lb_mediatest";

   function __construct($username, $password ,$fname, $lname, $birthday, $gender){
        
        $conn = new mysqli($servername,$dbname,$dbpass,$db);
        // Default things
        $username = $this->$username;
        $password = $this->$password;
        $fname = $this->$fname;
        $lname = $this->$lname;
        $birthday = $this->$birthday;
        $gender = $this->$gender;

          // add it to the db 
        addDB($username, $password ,$fname, $lname, $birthday);
        
        // Now link id with the username
        $idSQL = "SELECT * FROM 'db_leon' WHERE username = '$username';";
        $id = mysqli_query($conn,$idSQL);
        
    }

    function addDB($user, $password ,$fname, $lname, $birthday){
    
        $sql = "INSERT INTO `db_leon` (`user`, `password`, `fname`,`lname`,`birthday`) VALUES ('$user', '$password', '$fname ','$lname','$birthday');";
        
        $isAdded = mysqli_query($conn, $sql);

        if (!$mysqli->query("SET a=1")) {
            printf("Errormessage: %s\n", $mysqli->error);
        }

    }

    function readDB($id){
        $sql = "SELECT * FROM 'db_leon' WHERE id = '$id';";
        $isSelected = mysqli_query($conn, $sql);

        if (!$isSelected) {
            printf("Errormessage: %s\n", $mysqli->error);
        }else
        return $isSelected;
    }

    function updateDB($id,$fname,$lname,$password,$email){
    
        $sql = "UPDATE `db_leon` SET `fname` = '$fname', `lname` = '$lname', 
        `password` = '$password', `email` = '$email' WHERE (`id` = '$id')";

        $isUpdated = mysqli_query($conn,$sql); 

        if (!$isUpdated) {
            printf("Errormessage: %s\n", $mysqli->error);
        }
    }

    function deleteDB($id){
        $sql = "DELETE FROM `db_leon` WHERE (`id` = '$id')";
        
        $isDeleted = mysqli_query($conn,$sql);

        if (!$isDeleted) {
            printf("Errormessage: %s\n", $mysqli->error);
        }
    }

}


?>