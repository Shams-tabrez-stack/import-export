<?php

/**
 *
 */
class Auth_model extends CI_model
{

  public function create($formArray)
  {

    $this->db->insert('users',$formArray);
  }

  public function checkUser($email,$password)
    {
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    return $this->db->get('users')->row_array();
    }

  // function authorized(){
  //   $user =$this->session->userdata('user');
  //   if(!empty($user)){
  //     return true ;
  //   }else{
  //     return false;
  //   }
  // }

}


 ?>
