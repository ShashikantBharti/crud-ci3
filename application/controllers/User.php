<?php
/**
 * CRUD Using CI3
 * 
 * PHP Version 7
 * 
 * @category   CRUD
 * @package    CEDCOSS
 * @subpackage CRUD_Using_CI3
 * @author     Shashikant Bharti <surya.indian321@gmail.com>
 * @license    https://cedcoss.com/ <CEDCOSS 2020>
 * @link       http://localhost/training/ci3/
 * @since      Version 1.0
 */

/**
 * User Class
 * 
 * PHP Version 7
 * 
 * @category   CRUD
 * @package    CEDCOSS
 * @subpackage CRUD_Using_CI3
 * @author     Shashikant Bharti <surya.indian321@gmail.com>
 * @license    https://cedcoss.com/ <CEDCOSS 2020>
 * @link       http://localhost/training/ci3/
 * @since      Version 1.0
 */

class User extends CI_controller
{

    /**
     * Index Method.
     * 
     * @return void
     */
    function index()
    {
        $this->load->model('UserModel');
        $users = $this->UserModel->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list', $data);    
    }

    /**
     * Function to create user.
     * 
     * @return void
     */
    function create()
    {
        $this->load->model('UserModel');
        // Validation Rules
        $this->form_validation->set_rules(
            'name', 'Name', 'required'
        );
        $this->form_validation->set_rules(
            'email', 'Email', 'required|valid_email'
        );
        $this->form_validation->set_rules(
            'mobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('create');    
        } else {
            // Save User To Database.

            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['mobile'] = $this->input->post('mobile');

            $this->UserModel->create($formArray);
            $this->session->set_flashdata('success', 'User saved successfully!');
            redirect(base_url().'index.php/user/index');
        }

    }


    /**
     * Function to create user.
     * 
     * @param $userid User id Of Single User
     * 
     * @return void
     */
    function edit($userid = '')
    {
        $this->load->model('UserModel');
        $user = $this->UserModel->getUser($userid);
        $data = array();
        $data['user'] = $user;

        // Validation Rules
        $this->form_validation->set_rules(
            'name', 'Name', 'required'
        );
        $this->form_validation->set_rules(
            'email', 'Email', 'required|valid_email'
        );
        $this->form_validation->set_rules(
            'mobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]'
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('edit', $data);
        } else {
            // Update User
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['mobile'] = $this->input->post('mobile');

            $this->UserModel->updateUser($userid, $formArray);
            $this->session->set_flashdata('success', 'Record Updated successfully!');
            redirect(base_url().'index.php/user/index');
        }

    }

    /**
     * Delete Method.
     * 
     * @param $userid User id of User to delete.
     * 
     * @return void
     */
    function delete($userid = '')
    {
        $this->load->model('UserModel');
        $user = $this->UserModel->getUser($userid);

        if (empty($user)) {
            $this->session->set_flashdata('failure', 'Record Not Found!');
        } else {
            $user = $this->UserModel->deleteUser($userid);
            $this->session->set_flashdata('success', 'Record Deleted Successfully!');
        }
        redirect(base_url().'index.php/user/index');
    }
}


?>