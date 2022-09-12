<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => '',
      ];
      $this->view('pages/index', $data);
    }
    public function about(){
      $data = [
        'title' => 'About Us'
      ];
      $this->view('pages/about', $data);
    }
    public function insert()
    {
     $models = $this->model(('insert'));
     $values=$models->insert();
     echo $values;
    }
    public function login()
    {
      $this->view('pages/login');
    }
    public function logpage()
    {
      $models = $this->model(('read'));
      $values=$models->readone();
      session_start();
      if($_POST['email'] == $values->email && $_POST['password'] == $values->password)
      {
        $_SESSION['email'] = $values->email;
        echo "login succesflly";
        $this->view('pages/show');
      }
      else{
        echo "incorrect details";
      }
  }
  public function logpage1()
  {
    $this->view('pages/pass');
}

        public function save()
    {
        $model = $this->model('Books');
        $postData =$_POST;
        $model->binsert($postData); 
    }
    public function display()
    {
      $model=$this->model('Books');
      $posts=$model->display();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/posts',$data);
    }
    public function email()
    {
      $model=$this->model('Books1');
      $posts=$model->display();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/posts',$data);
    }


  }
  