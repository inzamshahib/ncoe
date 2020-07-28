<?php
class Olresults extends CI_Controller{
    public function index(){
        $data['title'] = 'Ol index';

        $this->load->view('templates/header');
        $this->load->view('pages/ol',$data);
        $this->load->view('templates/footer');
    }


    public function checkolres(){
        $data['title'] = 'O/L Results sheet';

        $olindex1 = $this->input->post('index1');
        $olindex2 = $this->input->post('index2');
        $olindex3 = $this->input->post('index3');
        
        if($olindex1 != ""){
            $data['olresults1'] = $this->olresults_model-> get_olresults1();
        }
        else{
            $data['olresults1'] = '';
            $olindex1 = 'N/A';
        }
        if($olindex2 != ""){
            $data['olresults2'] = $this->olresults_model-> get_olresults2();
            
        }else{
            $data['olresults2'] = '';
            $olindex2 = 'N/A';
        }
        if($olindex3 != ""){
            $data['olresults3'] = $this->olresults_model-> get_olresults3();
        }else{
            $data['olresults3'] = '';
            $olindex3 = 'N/A';
        }
        // var_dump($olindex2);
        $this->session->set_userdata('olindex1', $olindex1);
        $this->session->set_userdata('olindex2', $olindex2);
        $this->session->set_userdata('olindex3', $olindex3);
        // redirect('alresults');
        $this->load->view('templates/header');
        $this->load->view('pages/olresults',$data);
        $this->load->view('templates/footer');

        // var_dump($data);
        
    }
}
