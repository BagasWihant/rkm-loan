<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
    public function profil()
    {
        $data['user_username'] = session()->get('user_username');
        $data['user_name'] = session()->get('user_name');
        return view('user/profil',$data);
    }

    public function ganti_password()
    {
        
        $model = new UserModel();
        $username = session()->get('user_username');
        $password_old = $this->request->getVar('password_old');
        $password_new = $this->request->getVar('password_new');
        $password_new_confirm = $this->request->getVar('password_new_confirm');
        $data = $model->getUser($username);
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password_old, $pass);
            if($verify_pass){
                if($password_new == $password_new_confirm){                  
                    $password_hash = password_hash($password_new, PASSWORD_DEFAULT);
                    $model->gantiPassword($username, $password_hash);
                    session()->setFlashdata('msg_password_success', 'Password berhasil diganti');
                    return redirect()->to('/user/profil');
                }else{
                    session()->setFlashdata('msg_password_error', 'Confirm Password tidak sesuai');
                    return redirect()->to('/user/profil');
                }
            }else{
                session()->setFlashdata('msg_password_error', 'Password lama tidak sesuai');
                return redirect()->to('/user/profil');
            }
        }else{
            session()->setFlashdata('msg', 'Anda Belum Login');
            return redirect()->to('/login');
        }
        
        
        
        
    }

}
