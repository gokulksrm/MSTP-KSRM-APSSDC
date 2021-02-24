
<?php
include ("View/siginform.php");
include ("model/Model.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    function invoke()
    {
        if(isset($_POST['submit']))
        {
            $username= $_POST['username'];
            $password= $_POST['password'];
            $this->model->insert($username,$password);

       }
    }

}


?>