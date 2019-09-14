<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
 class Upload extends CI_Controller
  {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }
    function index()
    {
        $this->load->view('upload_view');
    }

    //Upload Image function
    function uploadImage()
    {
       $config['upload_path']   =   "uploads/";
       $config['allowed_types'] =   "jpg|jpeg|png";
       $config['max_size']      =   "500";
       $config['max_width']     =   "1907";
       $config['max_height']    =   "1280";
       $config['remove_spaces']	=	TRUE;
       $config['overwrite']		=	TRUE;
       //Renomeia arquivo no padrão [email].[extensão]
       //(remove pontos do email para evitar nomes inválidos de arquivos)
       $config["file_name"] = str_replace('.','',$this->session->email);
       $this->load->library('upload',$config);
       if(!$this->upload->do_upload())
       {
           $this->session->set_flashdata('uploadError',$this->upload->display_errors());
       }
       else
       {
           $finfo=$this->upload->data();
           //$this->_createThumbnail($finfo['file_name']);
           $data['uploadInfo'] = $finfo;
           $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext'];
           // You can view content of the $finfo with the code block below
           /*echo '<pre>';
           print_r($finfo);
           echo '</pre>';*/
       }
           redirect('candidato/menu');
    }
    //Create Thumbnail function
    function _createThumbnail($filename)
    {
        $config['image_library']    = "gd2";
        $config['source_image']     = "uploads/" .$filename;
        $config['create_thumb']     = TRUE;
        $config['maintain_ratio']   = TRUE;
        $config['width'] = "80";
        $config['height'] = "80";
        $config['overwrite'] = TRUE;
        $this->load->library('image_lib',$config);
        if(!$this->image_lib->resize())
        {
            echo $this->image_lib->display_errors();
        }
    }
  }
?>