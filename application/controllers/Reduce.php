<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reduce extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
    public function upload()
    {

        $config['upload_path']="./uploads";
        $config['allowed_types']='pdf|gif|jpg|png';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("the_file"))
        {
        $data = array('filename' => $this->upload->data());
        echo $data;
        }
        else{
        print_r($this->upload->display_errors());
        }
        
}
}