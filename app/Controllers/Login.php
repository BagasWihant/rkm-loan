<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        if(session()->get('logged_in')){
            return redirect()->to(session()->get('url'));
        }else{
            helper(['form']);
            echo view('login');
        }
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->getUser($username);
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $menu = $model->getMenu($data['user_akses']);       
                foreach($menu as $row){
                    $menu_arr[$row['kode_menu']] = $row['status'];
                }
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_username' => $data['user_username'],
                    'menu'          => $menu_arr,
                    'logged_in'     => TRUE,
                    'url'           => $data['url'],
                    'cross_cabang'  => $data['cross_cabang'],
                    'cabang_user'   => $data['kdcab'],
                    'kode_ao_user'  => $data['kode_ao'],
                    'tingkat_level' => $data['tingkat_level']
                ];
                $session->set($ses_data);
                return redirect()->to($data['url']);
                //echo json_encode(session()->get('menu'));                
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 