<?php
class logins extends CI_Model{
    public function validate(){
// grab user input
        $username = $this->security->xss_clean($this->input->post('name'));
        $password = $this->security->xss_clean($this->input->post('pass'));

// Prep the query
        $this->db->where('name', $username);
        $this->db->where('pass', $password);

// Run the query
        $query = $this->db->get('data');
// Let's check if there are any results
        if($query->num_rows == 1)
        {
// If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'userid' => $row->id,
                'name' => $row->name,
                'fname' => $row->fname,
                'lname' => $row->lname,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
// If the previous process did not validate
// then return false
        return false;
    }
}

?>