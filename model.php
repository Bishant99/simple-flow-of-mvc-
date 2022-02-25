<?php
include 'food.php';

class Model{
    public function getfooddetails(){

        return array(
            "Momo"=>new food('Momo','150','Momo is a type of dumpling dish popular primarily in Nepal, Tibet, Pakistan, and India. Momo can be found in the cuisines of Nepal and Tibet. It is similar to baozi, jiaozi and mantou in Chinese cuisine, buuz in Mongolian cuisine, gyoza in Japanese cuisine, mandu in Korean cuisine and manti in Afghan cuisines.')
            //"pizza="=> new food ('pizza','300','chickenpizza')
            
        );

    }


public function getFood($name){
    $allfoods=$this->getfooddetails();
    return $allfoods[$name];

}
}
?>