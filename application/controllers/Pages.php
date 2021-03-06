<?php
include_once 'php_serial.class.php';
class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}	
	
public function view($page = 'home')
{
	
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        
        $data['title'] = ucfirst($page);
       // if ($page == 'Home')
           $data['title'] = ''; //ucfirst($page); // Capitalize the first letter
        if ($page != 'script') 
       		$this->load->view('templates/header', $data);
         $this->load->view('pages/'.$page, $data);
         if ($page != 'script')
           $this->load->view('templates/footer', $data);
       
}
}
