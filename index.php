<!DOCTYPE html>

<html>
<head>
<title>구글 클라우드 번역기</title>

</head>


<body>
<h1>LIST OF LANGUAGES that you can choose for translate in GOOGLE CLOUD TRANSLATE API!</h1> 
<?php 
	$languages = file_get_contents('http://backend:3000/api/translate/listLanguages');
	$languages_json = json_decode($languages,true);
	$index = 1;
	echo "<table>";
	echo "<tr>
		<th>index</th>
		<th>code</th>
		<th>name</th>
	</tr>
	";
	foreach($languages_json as $language){
		echo "<tr>";
		echo "<td>".$index."</td>";
		echo "<td>".$language['code']."</td>";
		echo "<td>".$language['name']."</td>";
		echo "</tr>";
		$index += 1;
	}
	echo "</table>";
?>	

</body>
</html>
