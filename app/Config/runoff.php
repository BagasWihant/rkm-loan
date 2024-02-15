<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$username='BPRRKM';
$password='RkmJaya88';
$db='(DESCRIPTION =
  (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.77.62)(PORT = 1521))
  (CONNECT_DATA =
    (SERVER = DEDICATED)
    (SERVICE_NAME = ORCL)
  )
)';
$connection=oci_connect($username, $password, $db);
$periode = $_GET['periode'];
$sql="select sum(nlpokok) as runoff from krd400his where tgltrn>=to_date('".$periode."','YYYY-MM-DD')";
$result=oci_parse($connection,$sql);
oci_execute($result);


while(($row = oci_fetch_array($result,OCI_BOTH)) != false){
	$runoff = $row['RUNOFF'];
}

oci_close($connection);
echo json_encode(array(
	"runoff" => $runoff
));