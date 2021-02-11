<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('model_home');//load model
    }

    //fungsi untuk JO
	public function index()
	{
        // $data["jo"] = $this->model_home->getjo();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/joborder');
        $this->load->view('footer');
	}
    public function view_JO(){
        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        // $tanggal,$bulan,$tahun
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        $order_ascdesc = $_POST['order'][0]['dir'];
        $sql_total = $this->model_home->count_all_JO($tanggal,$bulan,$tahun);
        $sql_data = $this->model_home->filter_JO($search, $limit, $start, $order_field, $order_ascdesc,$tanggal,$bulan,$tahun);
        $sql_filter = $this->model_home->count_filter_JO($search,$tanggal,$bulan,$tahun);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );

        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    public function invoice()
	{
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/invoice');
        $this->load->view('footer');
	}

    public function customer()
	{
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/customer');
        $this->load->view('footer');
	}
    public function bon()
	{
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/bon');
        $this->load->view('footer');
	}
    public function view_bon(){
        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        // $status = $this->input->post('searchStatus');
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        $order_ascdesc = $_POST['order'][0]['dir'];
        $sql_total = $this->model_home->count_all_bon();
        $sql_data = $this->model_home->filter_bon($search, $limit, $start, $order_field, $order_ascdesc);
        $sql_filter = $this->model_home->count_filter_bon($search);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );

        header('Content-Type: application/json');
        echo json_encode($callback);
    }

    //fungsi untuk truk
    public function truck()
	{
        $data["truck"] = $this->model_home->gettruck();
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/truck',$data);
        $this->load->view('footer');
	}
    public function view_truck(){
        $search = $_POST['search']['value'];
        $limit = $_POST['length'];
        $start = $_POST['start'];
        // $status = $this->input->post('searchStatus');
        $order_index = $_POST['order'][0]['column'];
        $order_field = $_POST['columns'][$order_index]['data'];
        $order_ascdesc = $_POST['order'][0]['dir'];
        $sql_total = $this->model_home->count_all_truck();
        $sql_data = $this->model_home->filter_truck($search, $limit, $start, $order_field, $order_ascdesc);
        $sql_filter = $this->model_home->count_filter_truck($search);
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_total,
            'recordsFiltered' => $sql_filter,
            'data' => $sql_data
        );

        header('Content-Type: application/json');
        echo json_encode($callback);
    }
    
    public function penggajian()
	{
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/penggajian');
        $this->load->view('footer');
	}
    public function report()
	{
        $this->load->view('header');
        $this->load->view('sidebar');
		$this->load->view('home/report');
        $this->load->view('footer');
	}
}
