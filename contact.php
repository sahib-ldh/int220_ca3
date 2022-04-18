<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
</head>
<?php 
    session_start();
    if(isset($_SESSION['username']))
        include "template/header-name.php";
    else
        include "template/header.php";
?>

<div style="margin-top:150px;">
    <form style="padding:50px;">
        <h3>SAHIB SINGH</h3><br>
        <a href="https://in.linkedin.com/in/sahib-ldh" class="register"><i class="fab fa-linkedin pr-1"></i>Linkedin</a>
        <a href="mail to:sahib.12008326@lpu.in" class="register"><i class="fab fa-google pr-1"></i> Mail</a>
        <a href="https://github.com/sahib-ldh"class="register"><i class="fab fa-github pr-1"></i> Github</a>
        <br><br><br>
        
    </form>
    
</div>

<?php include "template/footer.php" ?>

</html>