<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH . '/views/pages/' . $page . '.php')) //  Dots are concatenators
		{
				// Whoops, we don't have a page for that!
				show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);	// Header
		$this->load->view('pages/' . $page, $data);		// Guts
		$this->load->view('templates/footer', $data);	// Footer
	}
}