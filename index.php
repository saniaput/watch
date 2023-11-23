<?php
$getfile = file_get_contents('people.json');
$jsonfile = json_decode($getfile);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Stream-High-School">
 <title>Stream</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/css/ilmudetil.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="">
   Stream High School</a>
  </div>
  <div class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-left">
    <li class="clr1 active"><a href="index.php">Home</a></li>
    <li class="clr2"><a href="">Football</a></li>
    <li class="clr3"><a href="">Basketball</a></li>
   </ul>
  </div>
 </div>
</nav>
</br></br></br></br>

<div class="container">
 <div class ="row">
  <div class="col-md-9">
   <table class="table table-striped table-bordered table-hover">
    <tr>
     <th>No.</th>
     <th>Schedule High School</th>
    </tr>  
    <?php $no=0;foreach ($jsonfile->records as $index => $obj): $no++;  ?>
    <tr>
     <td><?php echo $no; ?></td>    
    <td class="table-cell"><?php echo $obj->fname; ?></td>
    </tr>
    <?php endforeach; ?>
   </table>
  </div> 
 </div>
</div>
<script>
document.querySelectorAll(".table-cell").forEach(function(elm){
elm.addEventListener("mouseover", function(e){
 e.target.style.backgroundColor = 'red'; 
  var copyText = e.target.textContent; 
   const el = document.createElement('textarea');
  el.value = copyText;
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);

  /* Alert the copied text */
  alert("" + el.value);
  
});

})
</script>
</body>
</html>