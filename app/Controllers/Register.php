<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    protected $model;
    protected $cabang;

    public function __construct(){
        $this->model = new UserModel;

        $url = "http://192.168.77.69/test_oci/get_cabang.php";
        $send=$this->curl($url);
        $getdata = json_decode($send, TRUE);
        $this->cabang = $getdata;
    }
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        $data['hak_akses'] = $this->model->getHakAkses();
        $data['cabang'] = $this->cabang;
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'username'      => 'required|min_length[3]|max_length[50]|is_unique[users.user_username]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_username' => $this->request->getVar('username'),
                'user_akses'    => $this->request->getVar('userakses'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'kdcab'         => $this->request->getvar('cabang'),
                'kode_ao'       => $this->request->getvar('kode_ao')
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            $data['hak_akses'] = $this->model->getHakAkses();
            $data['cabang'] = $this->cabang;
            echo view('register', $data);
        }
         
    }

    private function curl($url){
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
        return $output;
    }
 
}