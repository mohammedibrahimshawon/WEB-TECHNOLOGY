<html>
<head>
   <?php 
        include 'Head.php';
        
     ?>  

<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <h3 align="">FORGOT PASSWORD</h3><br /> 
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">

</tr>
<tr>
<td width="20%"><label>Enter Email</label></td>
<td width="200%"><input type="email" name="email" class="txtField"/><span id="email"  class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body>
<?php 
        include 'footer.php';
        
     ?>
</html>