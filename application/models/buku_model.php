<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Prana
 * Date: 10/24/2020
 * Time: 9:45 AM
 * To change this template use File | Settings | File Templates.
 */
class Buku_Model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function insert($data){
        $this->db->insert('buku',$data);
    }

    function update($data){
        $this->db->where('kode',$data['kode']);
        $this->db->update('buku',$data);
    }

    function delete($id){
        $this->db->where('kode',$id);
        $this->db->delete('buku');
    }

    function get_all(){
        $query= $this->db->get('buku');
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return FALSE;
        }
    }

    function get_by_id($id){
        $this->db->where('kode',$id);
        $query=$this->db->get('buku');
        return $query->result();
    }

}