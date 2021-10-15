<?php
class Alpirivena extends CI_Controller{
    public function index(){
        $data['title'] = 'Add your A/L results';

        $this->load->view('templates/header');
        $this->load->view('pages/alpirivena',$data);
        $this->load->view('templates/footer');
    }


    public function checkalres(){
        $data['title'] = 'Select an Exam';

        $this->form_validation->set_rules('year', 'Year', 'required');
        $this->form_validation->set_rules('alindex', 'Index No.', 'required|is_exist[al_pirivena.AL_index]');
        $this->form_validation->set_rules('stream', 'Stream', 'required');
        $this->form_validation->set_rules('medium', 'Medium', 'required');
        $this->form_validation->set_rules('attempt', 'Attempt', 'required');
        $this->form_validation->set_rules('subjectnumber1', 'Subject No.', 'required');
        $this->form_validation->set_rules('subjectnumber2', 'Subject No.', 'required');
        $this->form_validation->set_rules('subjectnumber3', 'Subject No.', 'required');
        // $this->form_validation->set_rules('subjectnumber4', 'Subject No.', 'required');
        // $this->form_validation->set_rules('subjectname1', 'Subject Name', 'required');
        // $this->form_validation->set_rules('subjectname2', 'Subject Name', 'required');
        // $this->form_validation->set_rules('subjectname3', 'Subject Name', 'required');
        // $this->form_validation->set_rules('subjectname4', 'Subject Name', 'required');
        $this->form_validation->set_rules('grade1', 'Grade', 'required');
        $this->form_validation->set_rules('grade2', 'Grade', 'required');
        $this->form_validation->set_rules('grade3', 'Grade', 'required');
        // $this->form_validation->set_rules('grade4', 'Grade', 'required');
        $this->form_validation->set_rules('gentst', 'General test marks', 'required');
        $this->form_validation->set_rules('zscore', 'Zscore', 'required');
        // $this->form_validation->set_rules('git', 'GIT', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
			$this->load->view('pages/alpirivena',$data);
			$this->load->view('templates/footer');
        }else{
            $palindex = $this->input->post("alindex");
            $git = $this->input->post('git');
            $alyear = $this->input->post('year');

            $this->session->set_userdata('alindex', $palindex);
            $this->session->set_userdata('git', $git);
            $this->session->set_userdata('year',$alyear);
            $this->session->set_userdata('pdfdone', 0);
            $data['alresults'] = $this->alpirivena_model-> post_alresults();

            
            $this->load->view('templates/header');
            $this->load->view('pages/olpirivena',$data);
            $this->load->view('templates/footer');

        }
    }
}
