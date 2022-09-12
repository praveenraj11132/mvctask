<?php
public Books1 extends Database{
public function display()
    {
        $email=$_POST['email'];
        $this-> query("select * from book1 where email='$email'");
        return $this->resultSet();
    }
}
?>