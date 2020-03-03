<?php
/* untuk mencegah akses langsung pada file controller */

defined('BASEPATH') OR exit('No direct script access allowed');
 
/* penulisan nama class harus sesuai dengan nama file controller dan diawali dengan huruf besar*/

class Belajar extends CI_Controller {
	/* penghubung dengan model nya */
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
	/* penghubung dengan view nya */
	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}
 
}