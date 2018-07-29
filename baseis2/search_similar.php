<!DOCTYPE html>
<head>
 
    <title>songs</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="layout/layout.css">
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
<div id="search_menu" style="height:80px">
<div id="header">
     <h1> <a href="index.php" style="text-decoration: none; color: #40566B" >SONGS </a></h1>
    </div>
	</div>

<div style="padding-top:110px"> <h2> <center style="font-size:200%;font-family:courier;color:#40566B;">Αποτελέσματα αναζήτησης </center> </h2> <br> </div>
 <div class="list-all">

<?php 

//connect to database
$con = mysqli_connect("localhost","root","") or die('Could not connect: ' . mysql_error());
mysqli_select_db($con,"songs");
$con->query ('SET CHARACTER SET utf8'); 
$con->query ('SET COLLATION_CONNECTION=utf8_general_ci');

$sub_id=$_GET['sub_id']+1; 
$num=$_GET['num']; 
$sql1="SELECT id2 FROM avg_dist WHERE id1=$sub_id LIMIT $num";

if(!mysqli_query($con,$sql1))
    {
	printf("Wrong way");
       die('Error : ' . mysqli_error($con));
    }
	$rs_result=mysqli_query($con, $sql1);
	$num_rows = mysqli_num_rows($rs_result);
	if ($num_rows>0)
	{
	    while($row1=mysqli_fetch_assoc($rs_result)) 
		{
			$cur_id = $row1['id2'];
            $sql2="SELECT * FROM metadata WHERE id=$cur_id";
			if(!mysqli_query($con,$sql2))
			{
				printf("Wrong way");
				die('Error : ' . mysqli_error($con));
			}
			$f_result=mysqli_query($con, $sql2);
			$row2=mysqli_fetch_assoc($f_result);
				
			$id = $row2['id'];
			$artist = $row2['artist']; 
			$name = $row2['name']; 
			$type = $row2['type'];
			$length = $row2['length']; 
			$duration = $row2['duration'];
			$category = $row2['category'];
			$image = $row2['image'];
				
				echo"<div class='content'>
						<div>
							<img id='img' class='image_size' src='{$image}' />
						</div>
						<div class='uposub_id'>
							<p><u>Καλλιτέχνης:</u>  {$artist}</p>
							<p><u>Όνομα τραγουδιού:</u>  {$name}</p> 
							<p><u>Διάρκεια τραγουδιού:</u>  {$duration}</p>
							<p><u>Τύπος αρχείου τραγουδιού:</u>  {$type}</p>
							<p><u>Μέγεθος αρχείου τραγουδιού:</u>  {$length}</p> 
							<p><u>Κατηγορία:</u>  {$category}</p>
							
						</div>
						</div>";
		}
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
 </div>
</body>