<?

if($del_data){
   $file_pointer = fopen("data.txt", "w");
   $text = "";
   fwrite($file_pointer, $text);
   fclose($file_pointer); 
}

$file = file_get_contents('./data.txt', true);
$file = str_replace("#","<br>",$file);
?>

<head>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<title>Data view</title>
<meta name="generator" content="Note">
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<form action='data_view.php' method='post'>
<table border="1" width="700" cellspacing="0" bordercolordark="white" bordercolorlight="black" height="360">
    <tr>
        <td height="29"><span style="font-size:10pt;">&nbsp;���� ����Ǿ� �ִ� �����ʹ� �Ʒ��� �����ϴ�.</span></td>
    </tr>
    <tr>
        <td><br><span style="font-size:10pt;"><? echo "$file"; ?></span><br></td>
    </tr>
    <tr>
        <td height="29"><p align=left><input type='CHECKBOX' name="del_data"><input type='submit' value='������ ����' style="padding-top:3px;"></p></td>
    </tr>
</table>

</form>
<p>&nbsp;</p>
</body>

</html>
