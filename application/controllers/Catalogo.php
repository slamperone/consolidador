<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

	public function __construct() {

		parent::__construct();
		//$this->load->model('login_model');
	}

	public function index() {
		$data['page_title'] = 'Catálogo de cuentas';
		$data['page_subtitle'] = 'muestra todas las cuentas contables';
		$data['jsFunc']     =  array('Main','TableData','FormElements', );
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
			'bower/moment/min/moment.min.js',
			'bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
			'bower/bootstrap-daterangepicker/daterangepicker.js',
			'bower/bootstrap-timepicker/js/bootstrap-timepicker.js',
			'bower/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js',
			'bower/jquery.tagsinput/src/jquery.tagsinput.js',
			'bower/summernote/dist/summernote.min.js',
			'bower/ckeditor/ckeditor.js',
			'bower/ckeditor/adapters/jquery.js',
			'bower/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js',
			'bower/bootstrap-fileinput/js/fileinput.min.js',
			'bower/select2/dist/js/select2.min.js',
			'bower/autosize/dist/autosize.min.js',
			'bower/bootstrap-maxlength/src/bootstrap-maxlength.js',
			'bower/jquery.maskedinput/dist/jquery.maskedinput.min.js',
			'bower/jquery-maskmoney/dist/jquery.maskMoney.min.js',
			'js/form-elements.js',
		);
		$this->load->view('catalogo-cuentas', $data);
	}
}
 