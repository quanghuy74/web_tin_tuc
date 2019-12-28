<?php
class baiviet extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('baiviet_model');
    }

    function listbv()
    {
        $data = array();
        $data['temp'] = 'admin/baiviet/listbv';
        $data['list'] = $this->baiviet_model->get_list();
        $this->load->view('admin/index', $data);
    }

    function thembv()
    {
        $this->load->model('nhomtin_model');
        $data = array();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['temp'] = 'admin/baiviet/thembv';

        $NhomTin = $this->input->post('nhomtin');
        if ($this->input->post()) {
            $this->form_validation->set_rules('tieude', 'tiêu đề', 'required');
            $this->form_validation->set_rules('noidungtd', 'nội dung trích dẫn', 'required');
            $this->form_validation->set_rules('noidung', 'nội dung', 'required');
            $this->form_validation->set_rules('nhomtin', 'nhóm tin', 'required');


            $TieuDe = $this->input->post('tieude');
            $NoiDungTD = $this->input->post('noidungtd');
            $NoiDung = $this->input->post('noidung');
            $user = $this->session->userdata('user');
            $Luotlike = 0;
            $LuotXem = 0;
            $Ngay = date("y/m/d");

            $target_dir = "image/";
            $target_file = $target_dir . basename($_FILES["anhtrichdan"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["anhtrichdan"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
// Check if file already exists
            if (file_exists($target_file)) {
                echo "Đa có file này ";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES["anhtrichdan"]["size"] > 5000000) {
                echo "file quá lớn";
                $uploadOk = 0;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "chỉ chấp nhận file jpg, png, jpeg";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["anhtrichdan"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["anhtrichdan"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $AnhTrichDan = base_url() . 'image/' . $_FILES["anhtrichdan"]["name"];
            $input = array('NhomTin' => $NhomTin,
                'TieuDe' => $TieuDe,
                'NoiDungTD' => $NoiDungTD,
                'AnhTrichDan' => $AnhTrichDan,
                'NoiDUng' => $NoiDung,
                'LuotLike' => $Luotlike,
                'LuotXem' => $LuotXem,
                'Ngay' => $Ngay,
                'username' => $user
            );
            if($this->form_validation->run()) {
                $this->baiviet_model->create($input);
                $this->session->set_flashdata('mess', 'Đã thêm thành công');
                redirect(admin_url('baiviet/listbv'));
            } else {
                echo 'error';
            }
        }
            $this->load->view('admin/index', $data);
    }
    function suabv()
    {
        $this->load->model('nhomtin_model');
        $data = array();
        $data['nhomtin'] = $this->nhomtin_model->get_list();
        $data['temp'] = 'admin/baiviet/suabv';
        $id = $this->uri->segment(4);
        $data['baiviet'] = $this->baiviet_model->get_info($id);

        if ($this->input->post()) {
            $this->form_validation->set_rules('tieude', 'tiêu đề', 'required');
            $this->form_validation->set_rules('noidungtd', 'nội dung trích dẫn', 'required');
            $this->form_validation->set_rules('noidung', 'nội dung', 'required');
            $this->form_validation->set_rules('nhomtin', 'nhóm tin', 'required');

            $NhomTin = $this->input->post('nhomtin');
            $TieuDe = $this->input->post('tieude');
            $NoiDungTD = $this->input->post('noidungtd');
            $NoiDung = $this->input->post('noidung');
            $Luotlike = 0;
            $LuotXem = 0;
            $Ngay = date("y/m/d");

            $target_dir = "image/";
            $target_file = $target_dir . basename($_FILES["anhtrichdan"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["anhtrichdan"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
// Check if file already exists
            if (file_exists($target_file)) {
                echo "Đa có file này ";
                $uploadOk = 0;
            }
// Check file size
            if ($_FILES["anhtrichdan"]["size"] > 5000000) {
                echo "file quá lớn";
                $uploadOk = 0;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                echo "chỉ chấp nhận file jpg, png, jpeg";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["anhtrichdan"]["tmp_name"], $target_file)) {
                    echo "The file " . basename($_FILES["anhtrichdan"]["name"]) . " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

            $AnhTrichDan = base_url() . 'image/' . $_FILES["anhtrichdan"]["name"];
            $input = array('NhomTin' => $NhomTin,
                'TieuDe' => $TieuDe,
                'NoiDungTD' => $NoiDungTD,
                'AnhTrichDan' => $AnhTrichDan,
                'NoiDUng' => $NoiDung,
                'LuotLike' => $Luotlike,
                'LuotXem' => $LuotXem,
                'Ngay' => $Ngay
            );
            if ($this->form_validation->run()) {
                $this->baiviet_model->update($id, $input);
                $this->session->set_flashdata('mess', 'Đã sua thành công');
                redirect(admin_url('baiviet/listbv'));
            } else {
                echo 'error';
            }
        }
        $this->load->view('admin/index', $data);
    }

    function xoabv()
    {
        $id = $this->uri->segment(4);
        $this->baiviet_model->delete($id);
        $this->session->set_flashdata('mess', 'Bạn vừa xóa 1 bài viết ');
        $this->listbv();

    }

}
?>