<?php
  class Pages extends Controller {
    public function __construct(){
     
    }

  

    public function index(){
      $data = [
        'title' => 'Employee Details',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function adminview()
    {
      $this->view('pages/adminlogin');
    }

    public function guestview()
    {
      $model=$this->model('Book');
      $posts=$model->display();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/posts',$data);
    }

    
    public function admindetail()
    {
      if(isset($_POST)){
      $email=$_POST['email'];
      $password=$_POST['password'];
      if(ADMIN_NAME==$email && ADMIN_PASSWORD==$password)
      {
        // session_start();
        $_SESSION['ADMIN_NAME']='email';

      header('Location:http://localhost/mvc/index/logpage');
      exit;
      }

      else
      {
        $msg = 'invalid username and password';
        $data =[
          'title' => $msg];
        
        $this->view('pages/adminlogin' , $data);
      }
    
    }

  }

  public function logpage()
  {
    if(isset($_SESSION['ADMIN_NAME']))
    {
      $model=$this->model('Book');
      $posts=$model->display();
        $data=[
        'posts'=>$posts
      ];
      $this->view('pages/adminpage',$data);
    }
    else
    {
      header('Location:http://localhost/mvc/index/adminlogin');
      exit;
    }
  }

  public function searchview()
  {
    if(isset($_SESSION['ADMIN_NAME']))
    {
      error_reporting(E_ERROR | E_PARSE);
    $model=$this->model('Book');
    $posts=$model->disp();
    if($posts)
    {
    $data=[
      'posts'=>$posts
    ];
    $this->view('pages/searchpage',$data);
  }
  else{
        $data =[
          'title' => "user not found"
        ];
        
        $this->view('pages/searchpage1' , $data);
        
  }
}
  else{

    $this->view('pages/adminlogin');
  }
  }


    public function logout()
    {
      session_unset();
      session_destroy();
     $this->view('pages/adminlogin');
    }

    public function viewd()
    {
      if(isset($_SESSION['ADMIN_NAME']))
    {
      
      $model=$this->model('Book');
      $posts=$model->display();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/viewdetails',$data);
    }
      else{
        $this->view('pages/adminlogin');
      }
    }

    public function add()
    {
      if(isset($_SESSION['ADMIN_NAME']))
    {

     $this->view('pages/newdetails');
    }
     else{
      $this->view('pages/adminlogin');
     }
    }

    public function save()
    {
        $target_dir="../public/img/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
        $model = $this->model('Book');
        $postData =$_POST;
        $model->insertdata($postData,$target_file);
        header('Location:http://localhost/mvc/index/logpage');
      
    }


    public function delete($id)
    {
      $model=$this->model('Book');
      $model->del($id);
      header('Location:http://localhost/mvc/index/logpage');

    }

    public function edit($id)
    {
      if(isset($_SESSION['ADMIN_NAME']))
    {
      
      $models=$this->model('book');
      $models1=$models->empp($id);
      $this->view('pages/editform',$models1);
    }
    else{
      $this->view('pages/adminlogin');
    }
  
    }

    public function editsave()
    {
      $target_dir="../public/img/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);
      move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $phoneno=$_POST['phoneno'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $country=$_POST['country'];
      $pincode=$_POST['pincode'];
      $file=$_POST['file'];
      $id = $_POST['id'];
      $data=[$firstname,$lastname,$email,$phoneno,$street, $city,$state,$country,$pincode,$file,$id];
      $modal = $this->model('Book');
      $model1=$modal->modelEditSave($data,$target_file);
      header('Location:http://localhost/mvc/index/logpage');
    }
  }