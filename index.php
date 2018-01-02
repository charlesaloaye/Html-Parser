<?php include"inc/header.php";?> 
<body ng-controller="myCtrl"> 
 <ion-content ng-controller="myCtrl"> 
  <ion-refresher pulling-text="Ai said pull to reload this page..." on-refresh="doRefresh()"> 
  </ion-refresher> 
  <ion-list> 
   <ion-item ng-repeat="item in items"></ion-item> 
  </ion-list> 
 </ion-content> 

<div class="content">
<h1><?php echo $appname;?></h1>
<h3 class="text-muted"> <?php echo ucwords("awesome html/javascipt parser made simple");?> </h3>

<?php include"inc/validations.php";?>
<form action="" method="POST">

 <div class="form-group"> 
  <textarea name="parser"  rows="5" class="form-control" placeholder="Input contents to analyse"></textarea>
   </div>
  <button name="parse" type="submit" class="button button-block button-calm">Analyse </button>   
  </form>

  
 <script> 
   
 </script>           
   </body>
 <footer>
   
 </footer>
    </html>     
        