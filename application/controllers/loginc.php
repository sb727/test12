<?php
class loginc extends CI_Controller{

    public function login($msg = NULL){
// Load the model
        $this->load->model('logins');
// Validate the user can login
        $result = $this->logins->validate();
// Now we verify the result
        if(! $result){
// to the user

// If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $data['msg'] = $msg;
            $this->load->view('loginform', $data);
        }else{
// If user did validate,
// Send them to members area function inside your controllers directory.
            redirect('memberarea');
        }
    }

} ?>