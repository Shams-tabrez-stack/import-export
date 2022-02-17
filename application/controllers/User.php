<?php

/**
 *
 */
class User extends CI_controller
{



  function register(){

    if(empty($this->session->userdata('user'))){
          redirect(base_url().'index.php/Auth/login');
      }

      $this->load->view('includes/header');
    $this->load->view('register');
  }
  function import()
  {

    if(empty($this->session->userdata('user'))){
      redirect(base_url().'index.php/Auth/login');
  }
      $this->load->view('includes/header');
    $this->load->view('import');
  }



  function edit($id){
    if(empty($this->session->userdata('user'))){
        redirect(base_url().'index.php/Auth/login');
    }

    $this->load->model('User_model');
    $item=$this->User_model->getUser($id);
    $data= array();
    $data['item'] =$item;

    $this->form_validation->set_message('is_unique','email already exist');
      $this->form_validation->set_rules('first_name','First Name','required');
      $this->form_validation->set_rules('last_name','Last Name','required');
      $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
      $this->form_validation->set_rules('password','Password','required');
      $this->form_validation->set_rules('phone','Phone','required');
      $this->form_validation->set_rules('address','Address','required');
//
if($this->form_validation->run() == false){
  $this->load->view('includes/header');
  $this->load->view('register');
}else{

  $this->load->model('User_model');
  $formArray = array();
  $formArray['first_name']= $this->input->post('first_name');
   $formArray['last_name']= $this->input->post('last_name');
   $formArray['email']= $this->input->post('email');
   $formArray['phone']= $this->input->post('phone');
   $formArray['password']= $this->input->post('password');
   $formArray['address']= $this->input->post('address');
   //$formArray['created_at']= date('Y-m-d H:i:s');
  $this->User_model->updateUser($id,$formArray);
  $this->session->set_flashdata('msg', 'your account has been creatd successfully');
   redirect(base_url().'index.php/Auth/admin');
 }
  }

  function delete($id){
    $this->load->model('User_model');
    $this->User_model->deleteUser($id);
    $this->session->set_flashdata('success', 'records deleted succesfully');
    redirect(base_url().'index.php/User/admin');
  }

  function admin()
  {
    if(empty($this->session->userdata('user'))){
      redirect(base_url().'index.php/Auth/login');
  }

      $data = [];

      //wirting to get all users apart from admin
       $this->db->where("is_admin", 0);
      $users=$this->db->get('users');

       $data['users'] = $users->result_array();
       //var_dump($data); die;
      $this->load->view('includes/header');
    $this->load->view('admin',$data);
  }

  function profiles()
  {

    if(empty($this->session->userdata('user'))){
      redirect(base_url().'index.php/Auth/login');
  }
      $this->load->view('includes/header');
    $this->load->view('profiles');
  }
  function userdetails($id)
  {
    if(empty($this->session->userdata('user'))){
      redirect(base_url().'index.php/Auth/login');
  }

    $this->db->where("id",$id);
    $users_details = $this->db->get("users");
    $data["details"] = $users_details->result_array();
    //var_dump($data);die;

  $this->load->view('includes/header');
    $this->load->view('userdetails',$data);
  }

}



 ?>
