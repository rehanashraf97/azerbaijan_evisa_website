<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->helper('language');
        $this->load->model('apply_model');
		$this->lang->load('settings', 'english');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->helper('string');
		$this->load->library('email');
		$this->load->library('parser');
    }

	public function index()
	{
		$data['countries'] = $this->apply_model->getCountries();
		$this->load->view('apply',$data);
	}

	public function addApplydata()
	{	
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('travel_document', 'Travel document', 'required');
		$this->form_validation->set_rules('purpose_visit', 'Purpose visit', 'required');
		$this->form_validation->set_rules('visa_type', 'Visa type', 'required');
		$this->form_validation->set_rules('arival_date', 'Arival date', 'required');
		$this->form_validation->set_rules('nagro', 'Nagro', 'required');
		$this->form_validation->set_rules('hiv', 'HIV', 'required');
		$this->form_validation->set_rules('terms', 'Terms', 'required');
		// $this->form_validation->set_rules('surname', 'Surname', 'required');
		$this->form_validation->set_rules('first_name', 'First name', 'required');
		// $this->form_validation->set_rules('middle_name', 'Middle name', 'required');
		// $this->form_validation->set_rules('birth_day', 'Birth day', 'required');
		// $this->form_validation->set_rules('birth_month', 'Birth month', 'required');
		// $this->form_validation->set_rules('birth_year', 'Birth year', 'required');
		$this->form_validation->set_rules('birth_country', 'Birth country', 'required');
		$this->form_validation->set_rules('birth_place', 'Birth place', 'required');
		// $this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('occupation', 'Occupation', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone no', 'required');
		$this->form_validation->set_rules('mobile_no', 'Mobile no', 'required');
		$this->form_validation->set_rules('residence_address', 'Residence address', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		// $this->form_validation->set_rules('passport_no', 'Passport no', 'required');
		// $this->form_validation->set_rules('passport_issue', 'Passport issue', 'required');
		// $this->form_validation->set_rules('passport_expire', 'Passport expire', 'required');
		$this->form_validation->set_rules('checkdetails', 'Checkd Details', 'required');

		if ($this->form_validation->run() == TRUE) {
				$ref_code = random_string('alnum', 6);
				$ref_link = random_string('alnum', 90);
				$time = time();
	     		$config['upload_path']          = './uploads';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('passport_img'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('apply');
                        exit();
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $avatar = $data['upload_data']['file_name'];
                }

			
			$data = array(
				'country' =>$this->input->post('country')	,
				'travel_document' =>$this->input->post('travel_document')	,
				'purpose_visit' =>$this->input->post('purpose_visit')	,
				'visa_type' =>$this->input->post('visa_type')	,
				'ever_visited' =>$this->input->post('nagro')	,
				'confirm_hiv' =>$this->input->post('hiv')	,
				'terms_condition' =>$this->input->post('terms')	,
				'arival_date' =>$this->input->post('arival_date')	,
				// 'surname' =>$this->input->post('surname')	,
				'first_name' =>$this->input->post('first_name')	,
				// 'middle_name' =>$this->input->post('middle_name'),
				// 'birth_day' =>$this->input->post('birth_day')	,
				// 'birth_month' =>$this->input->post('birth_month')	,
				// 'birth_year' =>$this->input->post('birth_year')	,
				'birth_country' =>$this->input->post('birth_country')	,
				'birth_place' =>$this->input->post('birth_place')	,
				// 'gender' =>$this->input->post('gender'),
				'occupation' =>$this->input->post('occupation')	,
				'address' =>$this->input->post('address')	,
				'phone_no' =>$this->input->post('phone_no')	,
				'mobile_no' =>$this->input->post('mobile_no')	,
				'residence_address' =>$this->input->post('residence_address')	,
				'email_address' =>$this->input->post('email')	,
				// 'passport_no' =>$this->input->post('passport_no')	,
				// 'passport_issue' =>$this->input->post('passport_issue')	,
				// 'passport_expire' =>$this->input->post('passport_expire')	,
				'passport_img' =>$avatar,
				'ref_code' => $ref_code,
				'ref_link' => $ref_link,
				'created_on' => $time,
				'is_deleted' =>	'1',
			);
		}
		if ($this->form_validation->run() == TRUE && $this->apply_model->addApplyForm($data)) {

			$config = array();
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'smtp.gmail.com';
			$config['smtp_user'] = 'azerbaijanevisa11@gmail.com';
			$config['smtp_pass'] = 'soft@54321';
			$config['smtp_crypto'] = 'ssl';
			$config['smtp_port'] = 465;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$data_email = array(
				'Country' => $this->input->post('country'),
				'Travel_Document' => $this->input->post('travel_document'),
				'Purpose_of_Visa' => $this->input->post('purpose_visit'),
				'Type_of_Visa' => $this->input->post('visa_type'),
				'N' => $this->input->post('nagro'),
				'Reason' => $this->input->post('hiv'),
				'Arrival_Date' => $this->input->post('arival_date'),
				// 'Surname' => $this->input->post('surname'),
				'First_Name' => $this->input->post('first_name'),
				// 'Middle_Name' => $this->input->post('middle_name'),
				// 'Date_of_Birth' => $this->input->post('birth_day').'-'.$this->input->post('birth_month').'-'.$this->input->post('birth_year'),
				'Country_of_Birth' => $this->input->post('birth_country') ,
				'Place_of_Birth' => $this->input->post('birth_place'),
				// 'Gender' => $this->input->post('gender'),
				'Occupation' => $this->input->post('occupation'),
				'Address' => $this->input->post('address'),
				'Phone_Number' => $this->input->post('phone_no'),
				'Mobile_Number' => $this->input->post('mobile_no'),
				'Residence_Address' => $this->input->post('residence_address'),
				'Email_Address' =>$this->input->post('email'),
				// 'Passport_Number' => $this->input->post('passport_no'),
				// 'Passport_Issue_Date' => $this->input->post('passport_issue'),
				'Reference_Code' => $ref_code,
				'ref_link' => $ref_link,
			);
			$string_email = $this->parser->parse('email/confirm_email', $data_email, TRUE);
			if ($this->apply_model->sendEmail($string_email)) {
				
			}else{
				echo "Failed";
				exit();
			}
			$this->session->set_flashdata('success','Email Has Been Send Successfully');
			redirect('apply');
		}
	}

	public function payment($ref_code,$ref_link){
		if ($this->apply_model->refCodeExist($ref_code,$ref_link)) {
			$data['user_data'] = $this->apply_model->refCodeExist($ref_code,$ref_link);
			$this->load->view('payment',$data);
		}else{
			$this->session->set_flashdata('error','Unknown Request');
			redirect('apply');
		}
	}

}

/* End of file Apply.php */
/* Location: ./application/controllers/Apply.php */