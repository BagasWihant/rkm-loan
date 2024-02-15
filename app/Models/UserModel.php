<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','user_username','user_password','user_akses','user_created_at','kdcab','kode_ao','cross_cabang'];
    
    protected $conn;
    
    public function __construct(){
       $this->conn      = \Config\Database::connect();
    }

    public function gantiPassword($username,$password){
        $query = "update users set user_password = '".$password."' where user_username='".$username."'";
        $this->conn->query($query);
    }

    public function getUser($username){
        $query = "select users.*, tabel_level.keterangan, tabel_level.tingkat_level, tabel_level.url 
                    from users 
                    left join tabel_level on users.user_akses = tabel_level.kode_level 
                    where user_username = '".$username."'";
        return $this->conn->query($query)->getRowArray();
    }

    public function getMenu($user_akses){
        $query = "select tabel_menu.kode_menu, ifnull(x.status,0) as status from tabel_menu 
                    left join (select * from group_menu where group_menu.hak_akses = '".$user_akses."') x
                    on tabel_menu.kode_menu = x.kode_menu";
        return $this->conn->query($query)->getResultArray();
    }
    public function getHakAkses(){
        $query = "select * from tabel_level";
        return $this->conn->query($query)->getResultArray();
    }
    
    
}