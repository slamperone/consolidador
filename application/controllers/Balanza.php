<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balanza extends CI_Controller {

	public function __construct() {

		parent::__construct();
		//$this->load->model('login_model');
	}

	public function index() {
		$data['page_title'] = 'Balanzas';
		$data['page_subtitle'] = 'muestra el balance de las sociedades';
		$data['jsFunc']     =  array('Main','TableData');
		$data['estilosLoc'] = array('bower/select2/dist/css/select2.min.css',
			'bower/datatables/media/css/dataTables.bootstrap.min.css',
			'bower/select2/dist/css/select2.min.css',
			);
				$data['estilosLoc'] = array('bower/select2/dist/css/select2.min.css',
			'bower/datatables/media/css/dataTables.bootstrap.min.css',
			'bower/select2/dist/css/select2.min.css',
			'plugin/bootstrap-timepicker.min.css',
			'bower/select2/dist/css/select2.min.css',
			'bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
			'bower/bootstrap-daterangepicker/daterangepicker.css',
			'bower/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
			'bower/jquery.tagsinput/dist/jquery.tagsinput.min.css',
			'bower/summernote/dist/summernote.css',
			'bower/bootstrap-fileinput/css/fileinput.min.css',
			);




		$data['scriptsLoc'] = array(
			'bower/bootbox.js/bootbox.js',
			'bower/jquery-mockjax/dist/jquery.mockjax.min.js',
			'bower/select2/dist/js/select2.min.js',
			'bower/datatables/media/js/jquery.dataTables.min.js',
			'bower/datatables/media/js/dataTables.bootstrap.js',
			'js/table-data.js',
			'bower/select2/dist/js/select2.min.js',
			'bower/autosize/dist/autosize.min.js',
			'bower/bootstrap-maxlength/src/bootstrap-maxlength.js',
			'bower/jquery.maskedinput/dist/jquery.maskedinput.min.js',
			
		);


		$this->load->view('balanza', $data);
	}
}
