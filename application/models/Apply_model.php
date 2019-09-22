<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_model extends CI_Model {

	 public function getCountries()
    {
        $q = $this->db->get('countries');
        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return NULL;
    }

    public function addApplyForm($data)
    {
        if ($this->db->insert('apply', $data)) {
            return true;
        }
        return false;
    }

    public function sendEmail($string_email){
        $this->email->from('azerbaijanevisa11@gmail.com','Azerbaijan');
        $this->email->to('rehanashraf1997@gmail.com');
        $this->email->subject('Testing Email');
        $this->email->message($string_email);
        // echo "<pre>";
        // print_r($this->email);
        // exit();
        if ($this->email->send()) {
            return TRUE;
        }
        return False;
    }

    public function refCodeExist($ref_code,$ref_link)
     {
        $this->db->where('ref_code',$ref_code);
        $this->db->where('ref_link',$ref_link);
        $q = $this->db->get('apply');
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }
}

/* End of file Apply_model.php */
/* Location: ./application/models/Apply_model.php */