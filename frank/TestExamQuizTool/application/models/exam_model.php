<?php
class exam_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in table(exam)
$this->db->insert('exam', $data);
}
}
?>