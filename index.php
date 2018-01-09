<? php
$lan = substr( $HTTP_ACCEPT_LANGUAGE,0,5);
if ($lan == "zh-cn")
print("<meta http-equiv='refresh' content = '0;URL = ch/index.html'>");
else
print("<meta http-equiv='refresh' content = '0;URL = en/index.html'>");
?>
