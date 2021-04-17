<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reduce extends CI_Controller {



	public function index()
	{
       
		$this->load->view('index');

        
	}
    public function upload()
    {
        
        $config=array(
            'upload_path'=>'./uploads/',
            'allowed_types'=>'pdf|jpeg|jpg|png',
            'max_size'=> 4000,
            'max_width'=>1024,
            'max_height'=>768,
        );
       
        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( $this->upload->do_upload('the_file'))
        {
            print_r($this->upload->data());
            // $config=array(
            //     'image_library'=>'gd2',
            //     'source_image'=>'./uploads/'.$data["file_name"],
            //     'quality'=>'100%',
            //     'create_thumb'=> FALSE,
            //     'maintain_ratio'=>FALSE,
            //     'width'=>200,
            //     'height'=>200,
            //     'new_image'=>'./uploads/'.$data["file_name"],

            // );
            
            // $this->load->library('image_lib', $config);  
            // $this->image_lib->resize();  
            // $image_data = array(  
            // 'name'          =>     $data["file_name"]  
            // );  
            // echo $image_data;
        }
        else
        {
            print_r($this->upload->display_errors());
        }

    }
}
