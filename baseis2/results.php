<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet"  href="layout/layout.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
<script>
  function show(id) {
    document.getElementById(id).style.visibility = "visible";
  }
  function hide(id) {
    document.getElementById(id).style.visibility = "hidden";
  }
  function fix_size(id1,id2) {
    document.getElementById(id1).style.width = document.getElementById(id2).width;
	document.getElementById(id1).style.height = document.getElementById(id2).height;
  }
  
  window.onload = function() {
  fix_size('div', 'img');

};

	function show1(x)
{
	x.value="yyyy-mm-dd";
}

function hide1(x)
{
	x.value="";
}

</head>
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
		$i=0;
	    while($row=mysqli_fetch_assoc($result)) 
		{
            $id = $row['id'];
			$artist = $row['artist']; 
			$name = $row['name']; 
			$type = $row['type'];
			$length = $row['length']; 
			$duration = $row['duration'];
			$category = $row['category'];
			$image = $row['image'];
			
			echo"<div class='content'>
					<div>
						<img id='img{$i}' class='image_size' src='{$image}' />
					</div>
					<div class='upotitlos'>
						<p><u>Καλλιτέχνης:</u>  {$artist}</p>
						<p><u>Όνομα τραγουδιού:</u>  {$name}</p> 
						<p><u>Διάρκεια τραγουδιού:</u>  {$duration}</p>
						<p><u>Τύπος αρχείου τραγουδιού:</u>  {$type}</p>
						<p><u>Μέγεθος αρχείου τραγουδιού:</u>  {$length}</p> 
						<p><u>Κατηγορία:</u>  {$category}</p>
						
						
					</div>
					</div>";
		
		$i=$i+1;
		}
	?>
	
</div>

</body>

</html>