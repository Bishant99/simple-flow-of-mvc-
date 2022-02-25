<?php 
include 'model/model.php';
class controller{
    public $model;
    public function __construct(){
        $this->model= new Model();

    }
    public function invoke(){
        if(!isset($_GET['food'])){
            $foods=$this->model->getfooddetails();
            include './view/foodlist.php';
        }
        else{
            $foods=$this->model->getfood($_GET['food']);
            //include './view/viewfood.php';
        }
    }
}



?>