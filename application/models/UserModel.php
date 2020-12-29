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
class UserModel extends CI_model
{
    /**
     * Function to create user and save to database.
     * 
     * @param $formArray Form Data.
     * 
     * @return void
     */
    function create($formArray = '')
    {
        $this->db->insert('tbl_users', $formArray);
    }

    /**
     * Function to Fetch All Data From database.
     * 
     * @return Data
     */
    function all()
    {
        return $this->db->get('tbl_users')->result_array();
    }

    /**
     * Function to Fetch Single User From database.
     * 
     * @param $userid User id of Single User
     * 
     * @return Data
     */
    function getUser($userid = '')
    {
        $this->db->where('id', $userid);
        return $this->db->get('tbl_users')->row_array();
    }

    /**
     * Function to Update User From database.
     * 
     * @param $userid    User id of r Single User.
     * @param $formArray User id of Single User.
     * 
     * @return Data
     */
    function updateUser($userid, $formArray)
    {
        $this->db->where('id', $userid);
        $this->db->update('tbl_users', $formArray);
    }

    /**
     * Function to Delete User From database.
     * 
     * @param $userid User id of r Single User.
     * 
     * @return Data
     */
    function deleteUser($userid = '')
    {
        $this->db->where('id', $userid);
        $this->db->delete('tbl_users');
    }
}


?>