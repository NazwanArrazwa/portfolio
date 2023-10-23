<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public $template;
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->template->load('layouts/template', 'dashboard', $data);
    }
}
