<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class First_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('First_model');
        $result = $this->First_model->getAllTin();
        $result = array('result'=>$result);
            $this->load->view('user/insert-post-ads/insert-post-ads.php');

    }

    public function addTin()
    {
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
                echo "The file ". basename( $_FILES["anhtrichdan"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $AnhTrichDan = base_url().'image/'.$_FILES["anhtrichdan"]["name"];
        $this->load->model('First_model');
//      $this->First_model->inserttin($NhomTin, $TieuDe,$NoiDungTD,$AnhTrichDan,$NoiDung,$Luotlike,$LuotXem,$Ngay);
        if ($this->First_model->inserttin($NhomTin, $TieuDe,$NoiDungTD,$AnhTrichDan,$NoiDung,$Luotlike,$LuotXem,$Ngay)){
            $this->load->view('tin');
        }else{
            echo 'error';
        }

    }

    public function getTin($id){
        $this->load->model('First_model');
        $result = $this->First_model->getTinByID($id);
        $result = array('result'=>$result);

        $this->load->view('tin', $result);
    }
}