<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>songs</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	
	<link rel="stylesheet" href="layout/layout.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
 
</head>
<script>
function hide1(x)
{
	x.value="";
}
</script>


<body style="background-image: url('wallpaper.jpg')">

<div id="header" style="padding-top:10px">
     <h1> <a href="index.php" style="text-decoration: none; color: #40566B" >SONGS </a></h1>
    </div>

	
<div id="search_menu">
	<h2 style="font-size:100%;text-decoration: none; ">Ερωτήματα με βάση πεδίο δεδομένων των τραγουδιών</h2>
    <ul class="search">
	  <li class="menu backg">
			<a class="toplist " href="">Αναζήτησε κατηγορία τραγουδιού</a>
			<ul>
			    <br>
				<li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=allcategories" class="sublist">Όλες οι κατηγορίες</a></li> <br>
				<li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=rock" class="sublist">Rock</a></li> <br>
				<li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=pop" class="sublist">Pop</a></li> <br>
				<li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=rock_n_roll" class="sublist">Rock 'n' Roll</a></li> <br>
			    <li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=soul" class="sublist">Soul</a></li> <br>
				<li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=metal" class="sublist">Metal</a></li> <br>
				<li class="sublist backg"><a href="http://localhost/baseis2/search.php?key=rnb" class="sublist">R&B</a></li> <br>
			</ul>
		</li>
		<li class="menu backg">
			<a class="toplist" href="">Αναζήτησε όνομα τραγουδιού</a>
			<ul>
				<br>
				<li class="sublist">
					<form action="http://localhost/baseis2/search.php" method="get"> 
						<input type="text" id="search_form" name="song" value="insert song name" onclick="hide1(this)"> 
					</form>
				</li>
			</ul>
		</li>
		<li class="menu backg">
			<a class="toplist backg" href="">Αναζήτησε όνομα καλλιτέχνη</a>
			<ul>
				<br>
				<li class="sublist"> 
					<form action="http://localhost/baseis2/search.php" method="get"> 
						<input type="text" id="search_form" name="artist" value="insert artist" onclick="hide1(this)"> 
					</form>
				</li> 
			</ul>
		</li>
	
	</ul>

</div>


<div id="search_menu"  style="margin-top:270px">
	<h2 style="font-size:100%;text-decoration: none;">Ερωτήματα ομοιότητας τραγουδιών</h2>
	<ul class="search" style="width:100%>
		<li class="menu backg">
			<a>Αναζήτησε όνομα τραγουδιού: </a>
			<form action="http://localhost/baseis2/search_similar.php" method="get" id='sim_query' style="display: inline">
				<a style='padding-left:200px'> Εισάγετε επιθυμητό πλήθος όμοιων τραγουδιών: </a>
				<input type="text" id="search_form" name="num" value="insert k" onclick="hide1(this)"> 
				<input type="submit" >
			</form>
		<select form='sim_query' name="sub_id" required style="display: inline">
				<option value="none">None</option>
				
			<?php
					//connect to database
					$con = mysqli_connect("localhost","root","") or die('Could not connect: ' . mysql_error());
					mysqli_select_db($con,"songs");
					$con->query ('SET CHARACTER SET utf8'); 
					$con->query ('SET COLLATION_CONNECTION=utf8_general_ci');
					//select titles apo metadata table
					$sql="SELECT name FROM metadata ORDER BY id ASC";
					//run the query
					$result=mysqli_query($con, $sql); 

					if(!mysqli_query($con,$sql))
					{
						printf("Wrong way");
						die('Error : ' . mysqli_error($con));
					}
					//dhmiourgia option html tag
					$i=0;
					while($row=mysqli_fetch_assoc($result)) 
					{
						$name = $row['name']; 
						echo "<option value='$i'>$name</option>";
						$i=$i+1;
					}
			mysqli_close($con);
			?>
			</select>
	
	</ul>

</div> 



</body>

</html>