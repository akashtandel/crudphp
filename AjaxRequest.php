<?php 
include_once  $_SERVER['DOCUMENT_ROOT'].'/includes/connect.php';
$area = isset($_POST['area'])?$_POST['area']:'';
$module =isset($_POST['module'])?$_POST['module']:'';

if($area == 'GetStateCity')
{
    if($module= "ChnageCity"){
    
		include_once  $_SERVER['DOCUMENT_ROOT'].'/db_access/StateCity.php';
        

        $state_id = $_POST['state_id'];

        $arrCity = StateCity::getInstance()->getCityByStateId($state_id);
        
        ?> <option value=''>Select city</option><?php
        foreach ($arrCity as $key=>$val){
            ?>
            <option value=<?php echo $val['id'];?>><?php echo $val['name']?></option>
            <?php
        }
        

    }
}

if($area = "student"){
    if($module = "delete"){
        
        include_once  $_SERVER['DOCUMENT_ROOT'].'/db_access/Student.php';
        $id= (isset($_POST['id']) && $_POST['id'] >0)?$_POST['id']:''; 

        $delete = Student::getInstance()->deleteStudentById($id);

    }
}