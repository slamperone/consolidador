<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliza extends CI_Controller {

	public function __construct() {

		parent::__construct();
		//$this->load->model('login_model');
	}

	public function index() {
		$data['page_title'] = 'Polizas';
		$data['page_subtitle'] = 'muestra las polizas por periodo o rango';
		//$data['jsFunc']     = 'Index';
		$data['scriptsBot'] = array(//'js/index.js',
			/*"bower/Flot/jquery.flot.js",
		"bower/Flot/jquery.flot.pie.js",
		"bower/Flot/jquery.flot.resize.js",
		"bower/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js",
		"bower/jqueryui-touch-punch/jquery.ui.touch-punch.min.js",
		"bower/moment/min/moment.min.js",
		"bower/fullcalendar/dist/fullcalendar.min.js",
		"plugin/jquery.sparkline.min.js",*/
		);

		$this->load->view('misc/dashboard', $data);
	}
}
