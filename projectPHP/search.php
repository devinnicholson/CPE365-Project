
<head>
<meta charset="utf-8">
<script src="search.js"></script>
<title>UniRank</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="/styles.css" rel="stylesheet">
</head>
<body>


<div class="main-nav">

<ul class="nav">

<li class="name">UniRank v1.0.0</li>

<li><a href="index.php">Home</a></li>

<li><a href="view.php">View</a></li>

<li><a href="compare.php">Compare</a></li>
<li><a href="search.php">Search</a></li>
</ul>
</div>
<header>
<img src="uni.png" alt="some image" class="profile-image">
<h1 class="tag name">Search Universities</h1>
</header>


<main class="flex">
<div class="datagrid">
    
<section class="container">
<input type="search" class="light-table-filter" data-table="order-table" placeholder="Search for a University">

    <table class="order-table table">

 <thead><tr><th>Total Score</th><th>University</th><th>Country</th><th>Income</th><th>Research</th><th>Student Faculty Ratio</th></tr></thead>
 <tfoot><tr><td colspan="4"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</     span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a  href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
 <tbody>
 <?php

 //$db = new PDO('mysql:host=cslvm74.csc.calpoly.edu;dbname=dmarndt', 'dmarndt', '5259491');

  $db = new PDO('mysql:host=127.0.0.1;port=33306;dbname=dmarndt', 'dmarndt', '5259491');


  foreach ($db->query('select distinct ranking.total, university.name, country.name, ranking.income, ranking.research, ranking.studentFacultyRatio from university,      country, ranking where university.country = country.id and ranking.university =            university.id and ranking.income IS NOT NULL order by ranking.total DESC') as $row){
       ?>

<tr>
     <td><?php echo $row[0]; ?></td>
     <td><?php echo $row[1]; ?></td>
     <td><?php echo $row[2]; ?></td>
     <td><?php echo $row[3]; ?></td>
     <td><?php echo $row[4]; ?></td>
 </tr>
 <?php
 }
 ?>

</tbody>
</table>
</section>
</div>
</main>
<footer>
</body>
</html>


