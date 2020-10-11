<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_welcome");
    }

    public function index()
    {
        $data['alert'] = "";
        $this->load->view('loginnewnew', $data);
        //jika seasson loginnew belum sudah ada maka tampilkan home
        if ($this->session->userdata('loginnew')) {
            //jika seasson ada direct ke home
            redirect('home', 'refresh');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('loginnew');
        $this->session->unset_userdata('survei');
        redirect('welcome', 'refresh');
    }

    public function reloginnew()
    {
        if (!empty($this->input->get('url'))) {
            $data['url'] = $this->input->get('url');
            $pecah = explode(' ', $data['url']);

            if (count($pecah)>0) {
                $data['url'] = $pecah[0].'/';
                for ($x=1;$x<count($pecah);$x++) {
                    $data['url'] .= $pecah[$x].'/';
                }
            } else {
                $data['url'] = $data['url'];
            }
            // print_r($data['url']);die;
            $data['alert'] = "Silahkan loginnew kembali";
            $this->load->view('loginnew', $data);
            //jika seasson loginnew belum sudah ada maka tampilkan home
            if ($this->session->userdata('login')) {
                //jika seasson ada direct ke home
                redirect('home', 'refresh');
            }
        } else {
            $data['alert'] = "Silahkan loginnew kembali";
            $this->load->view('loginnew', $data);

            //jika seasson loginnew belum sudah ada maka tampilkan home
            if ($this->session->userdata('login')) {
                //jika seasson ada direct ke home
                redirect('home', 'refresh');
            }
        }
    }

    public function failloginnew()
    {
        $data['alert'] = "Username atau Password tidak valid. Silahkan loginnew kembali";
        $this->load->view('loginnewnew', $data);

        //jika seasson loginnew belum sudah ada maka tampilkan home
        if ($this->session->userdata('loginnew')) {
            //jika seasson ada direct ke home
            redirect('home', 'refresh');
        }
    }

   

   
}
