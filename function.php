<?php
include "config.php";
class Database{
    
    use DB_con;
         public function insert($cate_name, $remark) {
            $result = $this->conn->prepare("INSERT INTO categories(cate_name, remark) VALUES(:cate_name,:remark)");
            $result->execute([
                'cate_name' => $cate_name,
                'remark' => $remark,
      
            ]);
            return true;
        }

        public function fetchdata() {
            $result = $this->conn->query("SELECT * FROM categories");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = $this->conn->prepare("SELECT * FROM categories WHERE cate_id = :cate_id");
               $result->execute([
                'cate_id' => $userid,
      
            ]);
            return $result;
        }

        public function update($userid,$cate_name,$remark) {
            $result = $this->conn->prepare( "UPDATE categories SET cate_name = :cate_name,remark = :remark WHERE cate_id =:cate_id");
             $result->execute([
                'cate_id' => $userid,
                'cate_name' => $cate_name,
                'remark' => $remark,
      
            ]);
            return $result;
        }

        public function delete($userid) {
            $deleterecord = $this->conn->prepare( "DELETE FROM categories WHERE cate_id = :cate_id");
            $deleterecord->execute([
                "cate_id" => $userid
            ]);
            return $deleterecord;
        }
}


?>