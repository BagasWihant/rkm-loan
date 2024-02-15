<?php
namespace App\Controllers;
ini_set('max_execution_time', 0);

class Ajax extends BaseController
{
    public function loaddata(){
        
        header("Access-Control-Allow-Origin: *");
        $loadType = $this->request->getVar('loadType');
        $loadId   = $this->request->getVar('loadId');

        $html="";
        if($loadType == "manager_ao"){
            if(session()->get('tingkat_level') >= 4 ){
                $url = "http://192.168.77.69/test_oci/kode_manager_ao_per_cabang.php?kdcab=".$loadId;
                $send=$this->curl($url);
                $getdata = json_decode($send, TRUE);
            }else{
                $url = "http://192.168.77.69/test_oci/get_ao.php?kode_ao=".session()->get('kode_ao_user');
                $send=$this->curl($url);
                $getdata1 = json_decode($send, TRUE);

                $url = "http://192.168.77.69/test_oci/get_ao.php?kode_ao=".$getdata1['manager_ao'];
                $send=$this->curl($url);
                $getmanager = json_decode($send, TRUE);
                $getdata[] = array('manager_ao' => $getmanager['kode_ao'], 'nama' => $getmanager['nama']);
            }

            $html="<option value=''>Pilih Manajer</option>";
            foreach($getdata as $row){
                $html = $html."<option value='".$row['manager_ao']."'>".$row['nama']."</option>";
            }
        }elseif($loadType == "head_ao"){
            if(session()->get('tingkat_level') >= 3){
                $url = "http://192.168.77.69/test_oci/kode_head_ao_per_manager.php?manager_ao=".$loadId;
                $send=$this->curl($url);
                $getdata = json_decode($send, TRUE);
            }else{
                $url = "http://192.168.77.69/test_oci/get_ao.php?kode_ao=".session()->get('kode_ao_user');
                $send=$this->curl($url);
                $getdata1 = json_decode($send, TRUE);

                $url = "http://192.168.77.69/test_oci/get_ao.php?kode_ao=".$getdata1['head_ao'];
                $send=$this->curl($url);
                $getheadao = json_decode($send, TRUE);
                $getdata[] = array('head_ao' => $getheadao['kode_ao'], 'nama' => $getheadao['nama']);
            }

            $html="<option value=''>Pilih SPV</option>";
            foreach($getdata as $row){
                $html = $html."<option value='".$row['head_ao']."'>".$row['nama']."</option>";
            }
            
        }elseif($loadType == "ao"){
            if(session()->get('tingkat_level') >= 2){
                $url = "http://192.168.77.69/test_oci/kode_ao_per_spv.php?head_ao=".$loadId;
                $send=$this->curl($url);
                $getdata = json_decode($send, TRUE);

                $html="<option value=''>Pilih AO</option>";
                foreach($getdata as $row){
                    $html = $html."<option value='".$row['kode_ao']."'>".$row['nm_ao']."</option>";
                }
            }else{
                $url = "http://192.168.77.69/test_oci/get_ao.php?kode_ao=".session()->get('kode_ao_user');
                $send=$this->curl($url);
                $getdata1 = json_decode($send, TRUE);

                $url = "http://192.168.77.69/test_oci/get_ao.php?kode_ao=".$getdata1['kode_ao'];
                $send=$this->curl($url);
                $getao = json_decode($send, TRUE);
                $getdata[] = array('ao' => $getao['kode_ao'], 'nama' => $getao['nama']);

                $html="<option value=''>Pilih AO</option>";
                foreach($getdata as $row){
                    $html = $html."<option value='".$row['ao']."'>".$row['nama']."</option>";
                }
            }

            
        }
        echo $html;
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
?>