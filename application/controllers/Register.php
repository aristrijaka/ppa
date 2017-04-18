<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'button' => 'Submit Registrationt',
            'action' => site_url('register/create_action'),
			'idreg' => set_value('idreg'),
			'institution' => set_value('institution'),
			'nameofcp' => set_value('nameofcp'),
			'position' => set_value('position'),
			'email' => set_value('email'),
			'mobile' => set_value('mobile'),
			's_title' => set_value('s_title'),
			's_fname' => set_value('s_fname'),
			's_lname' => set_value('s_lname'),
			's_gender' => set_value('s_gender'),
			's_position' => set_value('s_position'),
			's_email' => set_value('s_email'),
			's_telp' => set_value('s_telp'),
			's_mobile' => set_value('s_mobile'),
			's_foodrest' => set_value('s_foodrest'),
			's_package' => set_value('s_package'),
			's_arrival' => set_value('s_arrival'),
			's_departure' => set_value('s_departure'),
			'c_title' => set_value('c_title'),
			'c_fname' => set_value('c_fname'),
			'c_lname' => set_value('c_lname'),
			'c_gender' => set_value('c_gender'),
			'c_position' => set_value('c_position'),
			'c_email' => set_value('c_email'),
			'c_telp' => set_value('c_telp'),
			'c_mobile' => set_value('c_mobile'),
			'c_foodrest' => set_value('c_foodrest'),
			'c_package' => set_value('c_package'),
			'c_arrival' => set_value('c_arrival'),
			'c_departure' => set_value('c_departure'),
			'konten' => 'register/register_form',
		);
        $this->load->view('site', $data);
    }

    public function read($id) 
    {
        if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
		
		$row = $this->Register_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idreg' => $row->idreg,
		'institution' => $row->institution,
		'nameofcp' => $row->nameofcp,
		'position' => $row->position,
		'email' => $row->email,
		'mobile' => $row->mobile,
		's_title' => $row->s_title,
		's_fname' => $row->s_fname,
		's_lname' => $row->s_lname,
		's_gender' => $row->s_gender,
		's_position' => $row->s_position,
		's_email' => $row->s_email,
		's_telp' => $row->s_telp,
		's_mobile' => $row->s_mobile,
		's_foodrest' => $row->s_foodrest,
		's_package' => $row->s_package,
		's_arrival' => $row->s_arrival,
		's_departure' => $row->s_departure,
		'c_title' => $row->c_title,
		'c_fname' => $row->c_fname,
		'c_lname' => $row->c_lname,
		'c_gender' => $row->c_gender,
		'c_position' => $row->c_position,
		'c_email' => $row->c_email,
		'c_telp' => $row->c_telp,
		'c_mobile' => $row->c_mobile,
		'c_foodrest' => $row->c_foodrest,
		'c_package' => $row->c_package,
		'c_arrival' => $row->c_arrival,
		'c_departure' => $row->c_departure,
		'create_at' => $row->create_at,
		'update_at' => $row->update_at,
		'konten' => 'register/register_read',
	    );
            $this->load->view('media', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register/data'));
        }
    }

    public function data() 
    {
		if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
			
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'register/data.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'register/data.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'register/data.html';
            $config['first_url'] = base_url() . 'register/data.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Register_model->total_rows($q);
        $register = $this->Register_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'register_data' => $register,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
			'konten' => 'register/register_list',
        );
        $this->load->view('media', $data);
    }
    
    public function create_action() 
    {
		
		$this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
		'institution' => $this->input->post('institution',TRUE),
		'nameofcp' => $this->input->post('nameofcp',TRUE),
		'position' => $this->input->post('position',TRUE),
		'email' => $this->input->post('email',TRUE),
		'mobile' => $this->input->post('mobile',TRUE),
		's_title' => $this->input->post('s_title',TRUE),
		's_fname' => $this->input->post('s_fname',TRUE),
		's_lname' => $this->input->post('s_lname',TRUE),
		's_gender' => $this->input->post('s_gender',TRUE),
		's_position' => $this->input->post('s_position',TRUE),
		's_email' => $this->input->post('s_email',TRUE),
		's_telp' => $this->input->post('s_telp',TRUE),
		's_mobile' => $this->input->post('s_mobile',TRUE),
		's_foodrest' => $this->input->post('s_foodrest',TRUE),
		's_package' => $this->input->post('s_package',TRUE),
		's_arrival' => $this->input->post('s_arrival',TRUE),
		's_departure' => $this->input->post('s_departure',TRUE),
		'c_title' => $this->input->post('c_title',TRUE),
		'c_fname' => $this->input->post('c_fname',TRUE),
		'c_lname' => $this->input->post('c_lname',TRUE),
		'c_gender' => $this->input->post('c_gender',TRUE),
		'c_position' => $this->input->post('c_position',TRUE),
		'c_email' => $this->input->post('c_email',TRUE),
		'c_telp' => $this->input->post('c_telp',TRUE),
		'c_mobile' => $this->input->post('c_mobile',TRUE),
		'c_foodrest' => $this->input->post('c_foodrest',TRUE),
		'c_package' => $this->input->post('c_package',TRUE),
		'c_arrival' => $this->input->post('c_arrival',TRUE),
		'c_departure' => $this->input->post('c_departure',TRUE),
	    );

            $this->Register_model->insert($data);
            $this->session->set_flashdata('message', 'Data Telah Berhasil Disimpan');
            redirect(site_url('register'));
        }
    }
    
    public function update($id) 
    {
        if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
		
		$row = $this->Register_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('register/update_action'),
		'idreg' => set_value('idreg', $row->idreg),
		'institution' => set_value('institution', $row->institution),
		'nameofcp' => set_value('nameofcp', $row->nameofcp),
		'position' => set_value('position', $row->position),
		'email' => set_value('email', $row->email),
		'mobile' => set_value('mobile', $row->mobile),
		's_title' => set_value('s_title', $row->s_title),
		's_fname' => set_value('s_fname', $row->s_fname),
		's_lname' => set_value('s_lname', $row->s_lname),
		's_gender' => set_value('s_gender', $row->s_gender),
		's_position' => set_value('s_position', $row->s_position),
		's_email' => set_value('s_email', $row->s_email),
		's_telp' => set_value('s_telp', $row->s_telp),
		's_mobile' => set_value('s_mobile', $row->s_mobile),
		's_foodrest' => set_value('s_foodrest', $row->s_foodrest),
		's_package' => set_value('s_package', $row->s_package),
		's_arrival' => set_value('s_arrival', $row->s_arrival),
		's_departure' => set_value('s_departure', $row->s_departure),
		'c_title' => set_value('c_title', $row->c_title),
		'c_fname' => set_value('c_fname', $row->c_fname),
		'c_lname' => set_value('c_lname', $row->c_lname),
		'c_gender' => set_value('c_gender', $row->c_gender),
		'c_position' => set_value('c_position', $row->c_position),
		'c_email' => set_value('c_email', $row->c_email),
		'c_telp' => set_value('c_telp', $row->c_telp),
		'c_mobile' => set_value('c_mobile', $row->c_mobile),
		'c_foodrest' => set_value('c_foodrest', $row->c_foodrest),
		'c_package' => set_value('c_package', $row->c_package),
		'c_arrival' => set_value('c_arrival', $row->c_arrival),
		'c_departure' => set_value('c_departure', $row->c_departure),
		'create_at' => set_value('create_at', $row->create_at),
		'update_at' => set_value('update_at', $row->update_at),
		'konten' => 'register/register_form',
	    );
            $this->load->view('media', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register/data'));
        }
    }
    
    public function update_action() 
    {
        if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
		
		$this->_rulesedit();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idreg', TRUE));
        } else {
            $data = array(
		'institution' => $this->input->post('institution',TRUE),
		'nameofcp' => $this->input->post('nameofcp',TRUE),
		'position' => $this->input->post('position',TRUE),
		'email' => $this->input->post('email',TRUE),
		'mobile' => $this->input->post('mobile',TRUE),
		's_title' => $this->input->post('s_title',TRUE),
		's_fname' => $this->input->post('s_fname',TRUE),
		's_lname' => $this->input->post('s_lname',TRUE),
		's_gender' => $this->input->post('s_gender',TRUE),
		's_position' => $this->input->post('s_position',TRUE),
		's_email' => $this->input->post('s_email',TRUE),
		's_telp' => $this->input->post('s_telp',TRUE),
		's_mobile' => $this->input->post('s_mobile',TRUE),
		's_foodrest' => $this->input->post('s_foodrest',TRUE),
		's_package' => $this->input->post('s_package',TRUE),
		's_arrival' => $this->input->post('s_arrival',TRUE),
		's_departure' => $this->input->post('s_departure',TRUE),
		'c_title' => $this->input->post('c_title',TRUE),
		'c_fname' => $this->input->post('c_fname',TRUE),
		'c_lname' => $this->input->post('c_lname',TRUE),
		'c_gender' => $this->input->post('c_gender',TRUE),
		'c_position' => $this->input->post('c_position',TRUE),
		'c_email' => $this->input->post('c_email',TRUE),
		'c_telp' => $this->input->post('c_telp',TRUE),
		'c_mobile' => $this->input->post('c_mobile',TRUE),
		'c_foodrest' => $this->input->post('c_foodrest',TRUE),
		'c_package' => $this->input->post('c_package',TRUE),
		'c_arrival' => $this->input->post('c_arrival',TRUE),
		'c_departure' => $this->input->post('c_departure',TRUE),
		'create_at' => $this->input->post('create_at',TRUE),
		'update_at' => $this->input->post('update_at',TRUE),
	    );

            $this->Register_model->update($this->input->post('idreg', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('register/data'));
        }
    }
    
    public function delete($id) 
    {
        if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
		
		$row = $this->Register_model->get_by_id($id);

        if ($row) {
            $this->Register_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('register/data'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('register/data'));
        }
    }

    public function _rules() 
    {
		$this->form_validation->set_rules('institution', 'Institution', 'trim|required');
		$this->form_validation->set_rules('nameofcp', 'Name of Contect Person', 'trim|required');
		$this->form_validation->set_rules('position', 'Position', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|numeric');
		
		$this->form_validation->set_rules('s_fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('s_lname', 'Last Name', 'trim');
		$this->form_validation->set_rules('s_position', 'Position', 'trim|required');
		$this->form_validation->set_rules('s_email', 'Email', 'trim|required|valid_email|is_unique[register.s_email]');
		$this->form_validation->set_rules('s_telp', 'Telephone', 'trim|numeric');
		$this->form_validation->set_rules('s_mobile', 'Mobile', 'trim|required|numeric');
		$this->form_validation->set_rules('s_foodrest', 'Foodrest Restriction', 'trim');
		$this->form_validation->set_rules('s_package', 'Journey on Campus Package', 'trim|required');
		$this->form_validation->set_rules('s_arrival', 'Arrival Date, Time & Flight', 'trim|required');
		$this->form_validation->set_rules('s_departure', 'Departure Date, Time & Flight', 'trim|required');
		
		
		$this->form_validation->set_rules('c_fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('c_lname', 'Lastname', 'trim');
		$this->form_validation->set_rules('c_position', 'Position', 'trim|required');
		$this->form_validation->set_rules('c_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('c_telp', 'Telephone', 'trim|numeric');
		$this->form_validation->set_rules('c_mobile', 'Mobile', 'trim|required|numeric');
		$this->form_validation->set_rules('c_foodrest', 'Foodrest Restriction', 'trim');
		$this->form_validation->set_rules('c_package', 'Journey on Campus Package', 'trim|required');
		$this->form_validation->set_rules('c_arrival', 'Arrival Date, Time & Flight', 'trim|required');
		$this->form_validation->set_rules('c_departure', 'Departure Date, Time & Flight', 'trim|required');
		
	
		$this->form_validation->set_rules('idreg', 'idreg', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	
	public function _rulesedit() 
    {
		$this->form_validation->set_rules('institution', 'Institution', 'trim|required');
		$this->form_validation->set_rules('nameofcp', 'Name of Contect Person', 'trim|required');
		$this->form_validation->set_rules('position', 'Position', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|numeric');
		
		$this->form_validation->set_rules('s_fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('s_lname', 'Last Name', 'trim');
		$this->form_validation->set_rules('s_position', 'Position', 'trim|required');
		$this->form_validation->set_rules('s_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('s_telp', 'Telephone', 'trim|numeric');
		$this->form_validation->set_rules('s_mobile', 'Mobile', 'trim|required|numeric');
		$this->form_validation->set_rules('s_foodrest', 'Foodrest Restriction', 'trim');
		$this->form_validation->set_rules('s_package', 'Journey on Campus Package', 'trim|required');
		$this->form_validation->set_rules('s_arrival', 'Arrival Date, Time & Flight', 'trim|required');
		$this->form_validation->set_rules('s_departure', 'Departure Date, Time & Flight', 'trim|required');
		
		
		$this->form_validation->set_rules('c_fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('c_lname', 'Lastname', 'trim');
		$this->form_validation->set_rules('c_position', 'Position', 'trim|required');
		$this->form_validation->set_rules('c_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('c_telp', 'Telephone', 'trim|numeric');
		$this->form_validation->set_rules('c_mobile', 'Mobile', 'trim|required|numeric');
		$this->form_validation->set_rules('c_foodrest', 'Foodrest Restriction', 'trim');
		$this->form_validation->set_rules('c_package', 'Journey on Campus Package', 'trim|required');
		$this->form_validation->set_rules('c_arrival', 'Arrival Date, Time & Flight', 'trim|required');
		$this->form_validation->set_rules('c_departure', 'Departure Date, Time & Flight', 'trim|required');
		
	
		$this->form_validation->set_rules('idreg', 'idreg', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
		
		$this->load->helper('exportexcel');
        $namaFile = "register.xls";
        $judul = "register";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Institution");
	xlsWriteLabel($tablehead, $kolomhead++, "Nameofcp");
	xlsWriteLabel($tablehead, $kolomhead++, "Position");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Mobile");
	xlsWriteLabel($tablehead, $kolomhead++, "S Title");
	xlsWriteLabel($tablehead, $kolomhead++, "S Fname");
	xlsWriteLabel($tablehead, $kolomhead++, "S Lname");
	xlsWriteLabel($tablehead, $kolomhead++, "S Gender");
	xlsWriteLabel($tablehead, $kolomhead++, "S Position");
	xlsWriteLabel($tablehead, $kolomhead++, "S Email");
	xlsWriteLabel($tablehead, $kolomhead++, "S Telp");
	xlsWriteLabel($tablehead, $kolomhead++, "S Mobile");
	xlsWriteLabel($tablehead, $kolomhead++, "S Foodrest");
	xlsWriteLabel($tablehead, $kolomhead++, "S Package");
	xlsWriteLabel($tablehead, $kolomhead++, "S Arrival");
	xlsWriteLabel($tablehead, $kolomhead++, "S Departure");
	xlsWriteLabel($tablehead, $kolomhead++, "C Title");
	xlsWriteLabel($tablehead, $kolomhead++, "C Fname");
	xlsWriteLabel($tablehead, $kolomhead++, "C Lname");
	xlsWriteLabel($tablehead, $kolomhead++, "C Gender");
	xlsWriteLabel($tablehead, $kolomhead++, "C Position");
	xlsWriteLabel($tablehead, $kolomhead++, "C Email");
	xlsWriteLabel($tablehead, $kolomhead++, "C Telp");
	xlsWriteLabel($tablehead, $kolomhead++, "C Mobile");
	xlsWriteLabel($tablehead, $kolomhead++, "C Foodrest");
	xlsWriteLabel($tablehead, $kolomhead++, "C Package");
	xlsWriteLabel($tablehead, $kolomhead++, "C Arrival");
	xlsWriteLabel($tablehead, $kolomhead++, "C Departure");
	xlsWriteLabel($tablehead, $kolomhead++, "Create At");
	xlsWriteLabel($tablehead, $kolomhead++, "Update At");

	foreach ($this->Register_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->institution);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nameofcp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->position);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->mobile);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_title);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_fname);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_lname);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_gender);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_position);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_telp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_mobile);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_foodrest);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_package);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_arrival);
	    xlsWriteLabel($tablebody, $kolombody++, $data->s_departure);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_title);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_fname);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_lname);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_gender);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_position);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_telp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_mobile);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_foodrest);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_package);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_arrival);
	    xlsWriteLabel($tablebody, $kolombody++, $data->c_departure);
	    xlsWriteLabel($tablebody, $kolombody++, $data->create_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->update_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        if($this->session->userdata('login') != TRUE){
            redirect('login');
		}
		
		header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=register.doc");

        $data = array(
            'register_data' => $this->Register_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('register/register_doc',$data);
    }

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-06 11:18:58 */
/* http://harviacode.com */