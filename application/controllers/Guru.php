<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('not-login', 'Silakan login terlebih dahulu!');
            redirect('welcome/guru');
        }
    }

    public function index()
    {
        $data['guru'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('guru/index', $data);
    }

    public function add_materi()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $data['guru'] = $this->db->get_where('guru', ['email' =>
                $this->session->userdata('email')])->row_array();
            $this->load->view('guru/add_materi', $data);
        } else {
            $video = ''; // Initialize video variable
            $upload_success = true;
            
            $upload_video = $_FILES['video'];

            if ($upload_video && !empty($upload_video['name'])) {
                $config['allowed_types'] = 'mp4|mkv|mov';
                $config['max_size'] = '50000'; // 50MB max
                $config['upload_path'] = './assets/materi_video';
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('fail-upload', 'Upload video gagal: ' . $error);
                    $upload_success = false;
                }
            }

            if ($upload_success) {
            $data = [
                'nama_guru' => htmlspecialchars($this->input->post('nama_guru', true)),
                'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel', true)),
                'video' => $video,
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            ];

                if ($this->db->insert('materi', $data)) {
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('guru'));
                } else {
                    $this->session->set_flashdata('fail-upload', 'Gagal menyimpan data ke database');
                    redirect(base_url('guru/add_materi'));
                }
            } else {
                redirect(base_url('guru/add_materi'));
            }
        }
    }

    public function lihat_data()
    {
        $data['guru'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();
        
        // Ambil materi yang diupload oleh guru ini
        $guru_email = $this->session->userdata('email');
        $guru_data = $this->db->get_where('guru', ['email' => $guru_email])->row_array();
        
        if ($guru_data) {
            $data['materi'] = $this->db->get_where('materi', ['nama_guru' => $guru_data['nama_guru']])->result();
        } else {
            $data['materi'] = [];
        }

        $this->load->view('guru/lihat_data', $data);
    }

    public function update_materi($id)
    {
        $data['guru'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();
        
        // Ambil data materi berdasarkan ID
        $data['materi'] = $this->db->get_where('materi', ['id' => $id])->row_array();
        
        // Cek apakah materi milik guru ini
        if ($data['materi']['nama_guru'] != $data['guru']['nama_guru']) {
            $this->session->set_flashdata('fail-update', 'Anda tidak memiliki akses untuk mengupdate materi ini');
            redirect('guru/lihat_data');
        }

        $this->load->view('guru/update_materi', $data);
    }

    public function materi_update()
    {
        $this->load->model('m_materi');

        // Form validation
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'Deskripsi terlalu pendek.',
        ]);

        if ($this->form_validation->run() == false) {
            // Redirect back to update form with error
            $id = $this->input->post('id');
            redirect('guru/update_materi/' . $id);
        } else {
            $id = $this->input->post('id');
            $nama_guru = htmlspecialchars($this->input->post('nama_guru', true));
            $nama_mapel = htmlspecialchars($this->input->post('nama_mapel', true));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
            $kelas = htmlspecialchars($this->input->post('kelas', true));

            // Handle video upload
            $video = $this->input->post('video_old'); // Keep old video by default
            $upload_video = $_FILES['video'];

            if ($upload_video && !empty($upload_video['name'])) {
                $config['allowed_types'] = 'mp4|mkv|mov';
                $config['max_size'] = '50000'; // 50MB max
                $config['upload_path'] = './assets/materi_video';
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    // Delete old video file if exists
                    $old_video = $this->input->post('video_old');
                    if (!empty($old_video) && file_exists('./assets/materi_video/' . $old_video)) {
                        unlink('./assets/materi_video/' . $old_video);
                    }
                    $video = $this->upload->data('file_name');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('fail-update', 'Upload video gagal: ' . $error);
                    redirect('guru/update_materi/' . $id);
                }
            }

            $data = array(
                'nama_guru' => $nama_guru,
                'nama_mapel' => $nama_mapel,
                'video' => $video,
                'deskripsi' => $deskripsi,
                'kelas' => $kelas,
            );

            $where = array(
                'id' => $id,
            );

            if ($this->m_materi->update_data($where, $data, 'materi')) {
                $this->session->set_flashdata('success-update', 'Data materi berhasil diupdate');
                redirect('guru/lihat_data');
            } else {
                $this->session->set_flashdata('fail-update', 'Gagal mengupdate data materi');
                redirect('guru/update_materi/' . $id);
            }
        }
    }

    public function delete_materi($id)
    {
        $data['guru'] = $this->db->get_where('guru', ['email' =>
            $this->session->userdata('email')])->row_array();
        
        // Ambil data materi berdasarkan ID
        $materi = $this->db->get_where('materi', ['id' => $id])->row_array();
        
        // Cek apakah materi milik guru ini
        if ($materi['nama_guru'] != $data['guru']['nama_guru']) {
            $this->session->set_flashdata('fail-delete', 'Anda tidak memiliki akses untuk menghapus materi ini');
            redirect('guru/lihat_data');
        }

        // Delete video file if exists
        if (!empty($materi['video']) && file_exists('./assets/materi_video/' . $materi['video'])) {
            unlink('./assets/materi_video/' . $materi['video']);
        }

        // Delete from database
        $this->db->where('id', $id);
        if ($this->db->delete('materi')) {
            $this->session->set_flashdata('success-delete', 'Data materi berhasil dihapus');
        } else {
            $this->session->set_flashdata('fail-delete', 'Gagal menghapus data materi');
        }
        
        redirect('guru/lihat_data');
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/materi_video';
        $config['allowed_types'] = 'mp4|mkv';
        $config['file_name'] = $this->product_id;
        $config['overwrite'] = true;
        $config['max_size'] = 0; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.mp4";
    }
}
