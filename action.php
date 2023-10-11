<?php 
    include('function.php');

    $insertdata = new Database();
    $fetchonerecord   = new Database();
    $update   = new Database();
    $deletedata = new Database();
    
    if (isset($_POST['insert'])) {
        
        header('Content-Type: application/json; charset=utf-8');
              
        $cate_name = $_POST['cate_name'];
        $remark = $_POST['remark'];
      
        
        $sql = $insertdata->insert($cate_name,$remark);

        if ($sql) {
  
        echo json_encode(["status"=>"400","msg"=>"Record Inserted Successfully!"]);
        } else {
        echo json_encode(["status"=>"404","msg"=>"Something went wrong! Please try again!"]);
            
        }
    }

   
   
    if (!empty($_POST['userid'])) {
        
        header('Content-Type: application/json; charset=utf-8');

        $userid = $_POST['userid'];
        
        $sql_delete = $deletedata->delete($userid);

        if ($sql_delete) {
  
        echo json_encode(["status"=>"400","msg"=>"Delete Successfully!"]);
        } else {
        echo json_encode(["status"=>"404","msg"=>"Something went wrong! Please try again!"]);
            
        }
    }
    if (!empty($_POST['edit'])) {
        
        header('Content-Type: application/json; charset=utf-8');

        $userid = $_POST['edit'];
        
        $sql_select_id = $fetchonerecord->fetchonerecord($userid);
        foreach($sql_select_id as $data){
        $data['cate_id'];
        }
        if ($sql_select_id) {
        echo json_encode(["status"=>"400","msg"=>"Fecth Success!","data"=>$data]);
        } else {
        echo json_encode(["status"=>"404","msg"=>"Something went wrong! Please try again!"]);
            
        }
    }

     if (!empty($_POST['update'])) {
         header('Content-Type: application/json; charset=utf-8');
      
              
        $userid = $_POST['cate_id'];
        $cate_name = $_POST['cate_name'];
        $remark = $_POST['remark'];
      
        
        $sql_update = $update->update($userid,$cate_name,$remark);

        if ($sql_update) {
 
        echo json_encode(["status"=>"400","msg"=>"Update Successfully!"]);
        } else {
        echo json_encode(["status"=>"404","msg"=>"Something went wrong! Please try again!"]);
            
        }
    }
    




?>