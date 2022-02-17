<?php

/**
 *
 */
class Auth extends CI_controller
{

  public function register()
  {
  //  $this->load->library('form_validation');
  $this->form_validation->set_message('is_unique','email already exist');
    $this->form_validation->set_rules('first_name','First Name','required');
    $this->form_validation->set_rules('last_name','Last Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('phone','Phone','required');
    $this->form_validation->set_rules('address','Address','required');

if($this->form_validation->run() == false){
  $this->load->view('includes/header');
  $this->load->view('register');
}else{

   $this->load->model('Auth_model');
   $formArray = array();
   $formArray['first_name']= $this->input->post('first_name');
    $formArray['last_name']= $this->input->post('last_name');
    $formArray['email']= $this->input->post('email');
    $formArray['phone']= $this->input->post('phone');
    $formArray['password']= $this->input->post('password');
    $formArray['address']= $this->input->post('address');
    $formArray['created_at']= date('Y-m-d H:i:s');
   $this->Auth_model->create($formArray);
   $this->session->set_flashdata('msg', 'your account has been creatd successfully');
    redirect(base_url().'index.php/Auth/register');
}

  }

  public function login()
  {

   $this->load->model('Auth_model');
   // $this->load->library('form_validation');
   $this->load->library('session');


   $this->form_validation->set_rules('email','Email:','required|valid_email');
   $this->form_validation->set_rules('password','password:','required');

   if($this->form_validation->run() == true){
     $email =$this->input->post('email');
      $password = $this->input->post('password');

     $user = $this->Auth_model->checkUser($email,$password);

     if(!empty($user)) {
         if($user['is_admin'] == 0 ){
             //If not admin the user
             $sessArray['id'] =$user['id'];
             $sessArray['email']= $user['email'];
             $sessArray['name'] = $user['first_name'] .' '. $user['last_name'];
             $this->session->set_userdata('user',$sessArray);
             redirect(base_url().'index.php/User/import');

         }else{
             //If the user is admin

            $sessArray['id'] =$user['id'];
             $sessArray['email']= $user['email'];
             $sessArray['name'] = $user['first_name'] .' '. $user['last_name'];

             $this->session->set_userdata('user',$sessArray);
             redirect(base_url().'index.php/User/admin');
         }
       }
       else{
         $this->session->set_flashdata('msg','incorrect email or password');
         redirect(base_url().'index.php/Auth/login');
      }

    }

   else{
      $this->load->view('includes/header');
      $this->load->view('login');

   }
 }
// function list(){
//   $this->load->model('Auth_model');
//   if($this->Auth_model->authorized() == false){
//     $this->session->set_flashdata('msg','incorrect email or password');
//     redirect(base_url().'index.php/Auth/login');
//
//
//   }
// $user=  $this->session->userdata('user');
// $data['user'] = $user;
// $this->load->view('list',$data);
// }
function logout(){
    $this->session->unset_userdata('user');
    redirect(base_url().'index.php/Auth/login');
    }

}




 ?>
