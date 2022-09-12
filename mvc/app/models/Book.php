<?php
class Book extends Database
{
    public function insertdata($postData,$target_file)
    {
       
        $fname=$postData['firstname'];
        $lname=$postData['lastname'];
        $email=$postData['email'];
        $phoneno=$postData['phoneno'];
        $street=$postData['street'];
        $city=$postData['city'];
        $state=$postData['state'];
        $country=$postData['country'];
        $pincode=$postData['pincode'];
        $photo=$target_file;
 
        $this->query("insert into book3(firstname,lastname,email,phoneno,street,city,state,country,pincode,photo,id)values('$fname','$lname','$email','$phoneno','$street','$city','$state','$country','$pincode','$photo','$id')");
        $this->execute();
        echo "insert successfully";
        
 
    }
   
    public function display()
 
    {
           $this-> query("select * from book3");
           return $this->resultSet();
    }

    public function del($id)
    {
      
           $this->query("DELETE FROM book3 where id='$id'");
           $this->execute();
    }

    public function disp()
    {
          $fname=$_POST['searc1'];
      
           $this->query("SELECT * FROM book3 where firstname='$fname'");
            return $this->resultSet();
    }
   
    public function empp($id)
    {
           $this->query("SELECT * FROM book3 where id=$id");
           return $this->single();
    }

    
    public function modelEditSave($data,$target_file)
        {
         
            
            $firstname=($data[0]);
            $lastname=($data[1]);
            $email=($data[2]);
            $phoneno=strval($data[3]);
            $street=($data[4]);
            $city=($data[5]);
            $state=($data[6]);
            $country=($data[7]);
            $pincode=($data[8]);
            $photo=$target_file;
            $id=($data[10]);
            $this->query("UPDATE book3 SET firstname ='$firstname',lastname ='$lastname',email ='$email',phoneno ='$phoneno',street='$street',city ='$city',state ='$state',country ='$country',pincode ='$pincode',photo='$photo',id=$id WHERE id = '$id'");
            $this->execute();
         
          }
}

    
