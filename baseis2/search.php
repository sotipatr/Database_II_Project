<!DOCTYPE html>
<head>
 
    <title>songs</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 
</head>

<script>
function noresults()
{
	alert('Δεν υπάρχουν αποτελέσματα!');
	window.location="http://localhost/baseis2/index.php";
	
}

</script>

<body>

<?php 

//connect to database
$con = mysqli_connect("localhost","root","") or die('Could not connect: ' . mysql_error());
mysqli_select_db($con,"songs");
$con->query ('SET CHARACTER SET utf8'); 
$con->query ('SET COLLATION_CONNECTION=utf8_general_ci');

if (isset($_GET['key']))
{
$key=$_GET['key']; //kleidi anazhthshs
}
else 
{
	$key='input';
}

if ($key=='rock')
{
	$sql="SELECT id,artist,name,type,length,duration,category,image  FROM metadata WHERE category LIKE '%rock%' ORDER BY id ASC ";
}
elseif ($key=='pop')
{
	$sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE category LIKE '%pop%' ORDER BY id ASC";
}
elseif ($key=='rock_n_roll')
{
	$sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE category LIKE '%roll%' ORDER BY id ASC " ;
}
elseif ($key=='allcategories')
{
	$sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata ORDER BY id ASC" ;
}
elseif ($key=='metal')
{
    $sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE category LIKE '%metal%' ORDER BY id ASC " ;
}
elseif ($key=='soul')
{
    $sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE category LIKE '%soul%' ORDER BY id ASC" ;
}
elseif ($key=='rnb')
{
    $sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE category LIKE '%r&b%' ORDER BY id ASC " ;
}

elseif ($key=='input')
{
	if(isset($_GET['song']))
	{ 
		
		$song=$_GET['song'];
		$sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE name LIKE '%$song%' ORDER BY id ASC " ;
	}
	
	if(isset($_GET['artist']))
	{ 
		
		$artist=$_GET['artist'];
		$sql="SELECT id,artist,name,type,length,duration,category,image FROM metadata WHERE artist LIKE '%$artist%' ORDER BY id ASC " ;
	}
	
}


 //run the query
$result=mysqli_query($con, $sql); 

if(!mysqli_query($con,$sql))
    {
	printf("Wrong way");
       die('Error : ' . mysqli_error($con));
    }
$num_rows = mysqli_num_rows($result);


if ($num_rows>0)
{
	include 'results.php';	
}

else
{
//no results
echo '<script type="text/javascript">'
   , 'noresults();'
   , '</script>'
;
}

mysqli_close($con);	
 ?>
</body>