<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="number" name="kode_otp" maxlength="4" minlength="4" placeholder="Masukkan OTP">
    <button type="submit" name="proses">Proses</button>
</form>

<?php
include 'koneksi.php';
if(isset($_POST['proses'])){
    session_start();
    $kode_otp   = $_POST['kode_otp'];
    $member_id  = $_SESSION['member_id'];
    // checking to database
    $sql = mysqli_query($koneksi, "SELECT * FROM member where member_id='$member_id' and kode_otp='$kode_otp'");
    $chek = mysqli_num_rows($sql);
    if($chek>0){
        $_SESSION['status_login']=TRUE;
        header("location:index.php");
    }else{
        echo "KODE OTP SALAH";
    }
}
?>