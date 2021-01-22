<html>
<?php
    $pass1 = "123123";
    $crypted1=crypt($pass1);
    
    $pass2 ="123124";
    $crypted2 = crypt($pass2);
    
    echo "<p>password: $pass1</p>";
    echo "<p>encrypted password: $crypted1</p>";
    echo "<p>password: $pass2</p>";
    echo "<p>encrypted password: $crypted2 </p>";
    
    
    $md=md5($pass2);
    $sha=sha1($pass2);
    $salt=crypt($pass2,"abc123");
    echo "<p>encrypted password MD5:$md  </p>";
    echo "<p>encrypted password SHAI: $sha</p>";
    echo "<p>encrypted hash from crypt(): $crypted2</p>";
    echo "<p>encrypted hash from crypt() with salt: $salt</p>";
?>
</html>