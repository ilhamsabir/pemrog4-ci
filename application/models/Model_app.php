<?php
/**
 * Created by Coffea Code.
 * User: Ilham Sabir
 * Date: 14/02/16
*/

//DATA


class Model_app extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table, $data, $field_key)
    {
        $this->db->update($table, $data,$field_key);
    }
    function deleteData($table, $data)
    {
        $this->db->delete($table, $data);
    }
    function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }
    function login($email, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
}
