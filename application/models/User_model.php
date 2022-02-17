<?php

/**
 *
 */
class User_model extends CI_model
{

  function deleteUser($id){
$this->db->where('id', $id);
  $this->db->delete('users');

}
function getUser($id){
    $this->db->where('id',$id);
    return $item =$this->db->get('users')->row_array();//select * from ItemsTable where itemID=?
  }

function updateUser($id,$formArray){
  $this->db->where('id',$id);
  $this->db->update('users',$formArray); //update ItemsTable set colname = value where;
}

}


 ?>
