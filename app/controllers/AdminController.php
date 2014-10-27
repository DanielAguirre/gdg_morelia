<?php 

class AdminController extends BaseController { 	  
	public function login() {
		return View::make('admin/login');
	}

	public function index() {
		return View::make('admin/index');
	}
}
