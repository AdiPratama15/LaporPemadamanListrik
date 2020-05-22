<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table>
        <tr><td>Email</td><td><input type="email" name="email"></td></tr>
        <tr><td>Password</td><td> <input type="password" name="password"></td></tr>
        <tr><td></td><td><button type="submit" name="submit">Login</button></td></tr>
    </table>
</form>

<?php
include 'koneksi.php';
include 'library.php';
include 'api-module/apifunction.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = mysqli_query($koneksi, "select * from member where email='$email' and password='$password'");
    $result = mysqli_num_rows($sql);
    if($result>0){
        // kirim OTP
        $new_otp = randomString(6);
        // insert ke database
        $member = mysqli_fetch_array($sql);
        mysqli_query($koneksi, "UPDATE  member SET kode_otp='$new_otp'");
        // kirim sms
        $message = "KODE OTP ANDA ADALAH : $new_otp";
        $send = sendsms($member['no_hp'], $message);
        // aktifkan session
        session_start();
        $_SESSION['member_id']=$member['member_id'];
        if($send){
            $_SESSION['hasil'] = "KODE OTP SUDAH DIKIRIM KE NO HP ANDA";
        }else{
            $_SESSION['hasil'] = "GAGAL MENGIRIMKAN KODE OTP, SILAHKAN COBA LAGI";
        }
        // redireck ke halaman OTPchecker
        header("location:OTPchecker.php");
    }else{
        header("location:form-login.php");
    }
}
?>