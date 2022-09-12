<?php
class insert extends Database
{
    public function insert()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['phone'];
        $password = $_POST['password'];
        $date =$_POST['date'];
        
        $this->query("insert into page1 (name,email,phone,password,dob) values('$name','$email','$number','$password','$date')");
        $this->execute();
        return "insert done succesfully";
    }

}
?>