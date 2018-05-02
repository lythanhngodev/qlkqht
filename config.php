<?php
/**
 * Created by PhpStorm.
 * User: linhn
 * Date: 4/21/2018
 * Time: 3:07 PM
 */
?>
<?php
class clsKetnoi{
    private $user='yenlinh23';
    private $pass='Yenlinh23';

    // Create connection to Oracle
    function ketnoi(){
        $conn = @oci_connect($this->user, $this->pass, '//desktop-84pbfhu/orcl:quanlydiem');
        if ($conn) echo "1";
        return $conn;
    }
    // Close the Oracle connection
    //oci_close($conn);
}
$ketnoi = new clsKetnoi();
$ketnoi->ketnoi();
?>
