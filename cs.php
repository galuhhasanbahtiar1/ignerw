<script>
<button onclick="var jsVar = "<?php 
$nomor = array("6283800900888","6283136812307"); 
$nomor1 = array("6283857491484"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Hi kak,saya mau beli *Followers, Liker* Atau mau tanya tanya dulu !";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>
