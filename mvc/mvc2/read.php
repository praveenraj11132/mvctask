<?php
class read extends Database
{
    public function readone()
    {
        $email = $_POST['email'];
        $this->query("select email,password from page1 where email ='$email'");
        $values= $this->single();
        return $values;
    }
   
}


?>