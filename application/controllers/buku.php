<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Prana
 * Date: 10/24/2020
 * Time: 9:45 AM
 * To change this template use File | Settings | File Templates.
 */

class Buku extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
    }


    function index()
    {
        if ($data['buku_database'] = $this->buku_model->get_all()) {
            $data['buku_database'] = $this->buku_model->get_all();

        } else {
            $data['buku_database'] = array();

        }
        $this->load->view('header');
        $this->load->view('buku_input');
        $this->load->view('buku_table', $data);
        $this->load->view('footer');
    }

    function insert()
    {
        $data = array(
            'kode' => rand(0, 1000),
            'judul' => $this->input->post('judul'),
            'penerbit' => $this->input->post('penerbit'),
            'pengarang' => $this->input->post('pengarang'),
            'tanggal' => $this->input->post('tanggal'),
            'stock' => $this->input->post('stock'),
        );

        $this->buku_model->insert($data);
        redirect('buku');

    }

    function ubah()
    {
        $id = $this->uri->segment(3);
        $data['buku_database'] = $this->buku_model->get_by_id($id);
        $this->load->view('header');
        $this->load->view('buku_update', $data);
        $data['buku_database'] = $this->buku_model->get_all();
        $this->load->view('buku_table', $data);
        $this->load->view('footer');

    }

    function update()
    {
        $data = array(
            'kode' => $this->input->post('kode'),
            'judul' => $this->input->post('judul'),
            'penerbit' => $this->input->post('penerbit'),
            'pengarang' => $this->input->post('pengarang'),
            'tanggal' => $this->input->post('tanggal'),
            'stock' => $this->input->post('stock'),
        );

        $this->buku_model->update($data);
        redirect('buku');
    }

    function delete(){
        if ($data['buku_database'] = $this->buku_model->get_all()) {
            $data['buku_database'] = $this->buku_model->get_all();

        } else {
            $data['buku_database'] = array();

        }
        $id = $this->uri->segment(3);
        $this->buku_model->delete($id);
        $data['buku_database'] = $this->buku_model->get_all();
        $this->load->view('header');
        $this->load->view('buku_input', $data);
        $this->load->view('buku_table');
        $this->load->view('footer');
        redirect('buku');
    }

}