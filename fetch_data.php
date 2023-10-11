<?php
include "function.php";

$fetchdata = new Database();
//   if (isset($_GET['read'])) {
        $users = $fetchdata->fetchdata();
        $output = '';
        if ($users) {
            foreach($users as $row) {
                $output .= '<tr>
                            <td>' . $row['cate_id'] . '</td>
                            <td>' . $row['cate_name'] . '</td>
                            <td>' . $row['remark'] . '</td>
                            <td>
                                <button type="button" id="'. $row['cate_id'] .'" class="btn btn-success btn-sm rounded-pull py-0 editlink">ແກ້ໄຂ</button>
                            </td>
                            <td><button type="button"id="'. $row['cate_id'] .'" class="btn btn-danger btn-sm rounded-pull py-0 deletelink">ລົບ</button></td>
                </tr>';
            }
            echo $output;
        } else {
            echo '<tr>
                <td colspan="6">No users found in the Database</td>
            </tr>';
        }
    // }




?>