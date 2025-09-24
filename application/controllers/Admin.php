<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('not-login', 'Gagal!');
            redirect('welcome/admin');
        }
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('admin/index', $data);
    }

    public function about_developer()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('admin/about_developer', $data);
    }

    public function about_learnify()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('admin/about_learnify', $data);
    }

    // Management Siswa

    public function data_siswa()
    {
        $this->load->model('m_siswa');

        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_siswa->tampil_data()->result();
        $this->load->view('admin/data_siswa', $data);
    }

    public function detail_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id' => $id);
        $detail = $this->m_siswa->detail_siswa($id);
        $data['detail'] = $detail;
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('admin/detail_siswa', $data);
    }

    public function update_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id' => $id);
        $data['user'] = $this->m_siswa->update_siswa($where, 'siswa')->result();
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('admin/update_siswa', $data);
    }

    public function user_edit()
    {
        $this->load->model('m_siswa');

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $gambar = $_FILES['image']['name'];

        $data = array(
            'nama' => $nama,
            'email' => $email,
        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/profile_picture';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['user']['image'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/profile_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('image', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id' => $id,
        );

        $this->m_siswa->update_data($where, $data, 'siswa');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_siswa');
    }

    public function delete_siswa($id)
    {
        $this->load->model('m_siswa');
        $where = array('id' => $id);
        $this->m_siswa->delete_siswa($where, 'siswa');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_siswa');
    }

    // manajemen guru

    public function data_guru()
    {
        $this->load->model('m_guru');
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_guru->tampil_data()->result();
        $this->load->view('admin/data_guru', $data);
    }

    public function detail_guru($nip)
    {
        $this->load->model('m_guru');
        $where = array('nip' => $nip);
        $detail = $this->m_guru->detail_guru($nip);
        $data['detail'] = $detail;
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('admin/detail_guru', $data);
    }

    public function update_guru($nip)
    {
        $this->load->model('m_guru');
        $where = array('nip' => $nip);
        $data['user'] = $this->m_guru->update_guru($where, 'guru')->result();
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('admin/update_guru', $data);
    }

    public function guru_edit()
    {
        $this->load->model('m_guru');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = array(
            'nip' => $nip,
            'nama_guru' => $nama,
            'email' => $email,

        );

        $where = array(
            'nip' => $nip,
        );

        $this->m_guru->update_data($where, $data, 'guru');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/data_guru');
    }

    public function update_materi($id)
    {
        $this->load->model('m_materi');
        $where = array('id' => $id);
        $data['user'] = $this->m_materi->update_materi($where, 'materi')->result();
        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('admin/update_materi', $data);
    }

    public function materi_edit()
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
            redirect('admin/update_materi/' . $id);
        } else {
            $id = $this->input->post('id');
            $nama_guru = htmlspecialchars($this->input->post('nama_guru', true));
            $nama_mapel = htmlspecialchars($this->input->post('nama_mapel', true));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));

            $data = array(
                'nama_guru' => $nama_guru,
                'nama_mapel' => $nama_mapel,
                'deskripsi' => $deskripsi,
            );

            $where = array(
                'id' => $id,
            );

            if ($this->m_materi->update_data($where, $data, 'materi')) {
                $this->session->set_flashdata('success-edit', 'berhasil');
                redirect('admin/data_materi');
            } else {
                $this->session->set_flashdata('fail-edit', 'Gagal mengupdate data materi');
                redirect('admin/update_materi/' . $id);
            }
        }
    }

    public function delete_guru($nip)
    {
        $this->load->model('m_guru');
        $where = array('nip' => $nip);
        $this->m_guru->delete_guru($where, 'guru');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_guru');
    }

    public function add_guru()
    {
        $this->form_validation->set_rules('nip', 'Nip', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom NIP.',
            'min_length' => 'NIP terlalu pendek.',
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[guru.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom nAMA.',
            'min_length' => 'Nama terlalu pendek.',
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
            'matches' => 'Password tidak sama!',
        ]);

        if ($this->form_validation->run() == false) {
            $data['admin'] = $this->db->get_where('admin', ['email' =>
                $this->session->userdata('email')])->row_array();
            $this->load->view('guru/registration', $data);
        } else {
            $data = [
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nama_guru' => htmlspecialchars($this->input->post('nama', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_mapel' => htmlspecialchars($this->input->post('mapel', true)),
            ];

            $this->db->insert('guru', $data);

            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('admin/data_guru'));
        }
    }

    //manajemen materi

    public function data_materi()
    {
        $this->load->model('m_materi');

        $data['admin'] = $this->db->get_where('admin', ['email' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_materi->tampil_data()->result();
        $this->load->view('admin/data_materi', $data);
    }

    public function delete_materi($id)
    {
        $this->load->model('m_materi');
        $where = array('id' => $id);
        $this->m_materi->delete_materi($where, 'materi');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/data_materi');
    }

    public function tambah_materi()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $data['admin'] = $this->db->get_where('admin', ['email' =>
                $this->session->userdata('email')])->row_array();
            $this->load->view('admin/add_materi', $data);
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
            } else {
                $this->session->set_flashdata('fail-upload', 'Harap pilih file video untuk diupload');
                $upload_success = false;
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
                    redirect(base_url('admin/data_materi'));
                } else {
                    $this->session->set_flashdata('fail-upload', 'Gagal menyimpan data ke database');
                    redirect(base_url('admin/tambah_materi'));
                }
            } else {
                redirect(base_url('admin/tambah_materi'));
            }
        }
    }
}
