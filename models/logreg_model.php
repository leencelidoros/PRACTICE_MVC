<?php



public function insert_user($username,$email,$phonenumber,$password){

    global $db;
    $count=0;
    try{
      
        if(isset($_POST['submit'])){
        
            $username=$_POST['username'];
            $email=$_POST['email'];
            $phonenumber=$_POST['phonenumber'];
            $password=$_POST['password'];

                
            $query="INSERT INTO mvcpractice (username,email,phonenumber,password) 
            VALUES('$username','$email','$phonenumber','$password')";
             $result=$db->prepare($query);
            if($statement->execute()) {
                $count = $result->rowCount();
            };
            $statement->closeCursor();
            return $count;
            }
            
        }catch(PDOException $e){

        return $return = "Your fail message: " . $e;
    }
}


