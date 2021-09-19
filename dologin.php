    <?php
    session_start();
    $link= mysqli_connect("localhost","root","12345678","myweb") or die(mysqli_error($link));
    mysqli_query($link, "SET NAMES utf8");

    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    
    $username = mysqli_real_escape_string($link, $username);
    $passwd = mysqli_real_escape_string($link, $passwd);
    
    $sql = "SELECT * FROM account WHERE
        username = '$username' AND passwd = '$passwd'
        LIMIT 1";
    $result =   mysqli_query($link, $sql) or die(mysqli_error($link));
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['passwd'] = $row['passwd'];
        header("location:home.php");
    }
    else{
        header("location:login.php?error=1");
    }
    ?>