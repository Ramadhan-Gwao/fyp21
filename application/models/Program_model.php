<?php 

    class Program_model extends CI_Model
    {
        public function get_programs()
        {
            $query = $this->db->get('programmes');
            return $query->result();
        }
        public function get_exams()
        {
            $query = $this->db->get('exam');
            return $query->result();
        }
        public function get_venues()
        {
            $query = $this->db->get('venues');
            return $query->result();
        }


    }
?>