<?php 
include 'includes/db.php';
include 'header.php';

 ?>





<div class="col-md-10 com">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
             <div class="row">

 <div class="col-md-3 col-sm-3 col-xs-6">
                     <a href="manage-books.php" style="text-decoration: none;"> <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>
<?php 
$sql ="SELECT id from books ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>


                            <h3><?php echo htmlentities($listdbooks);?></h3>
                      Books Listed
                        </div></a>
                    </div>

            
                 <div class="col-md-3 col-sm-3 col-xs-6">
                      <a href="manage-issue-books.php" style="text-decoration: none;"><div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-bars fa-5x"></i>
<?php 
$status=0;
$sql1 ="SELECT id from issuebookdetails where status=:status";
$query1 = $dbh -> prepare($sql1);
$query1->bindParam(":status",$status,PDO::PARAM_STR);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$issuedbooks=$query1->rowCount();

?>

                            <h3><?php echo htmlentities($issuedbooks);?> </h3>
                           Times Book Issued
                        </div></a>
                    </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
<?php 
$status=1;
$sql2 ="SELECT id from issuebookdetails where status=:status";
$query2 = $dbh -> prepare($sql2);
$query2->bindParam(':status',$status,PDO::PARAM_STR);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$returnedbooks=$query2->rowCount();
?>

                            <h3><?php echo htmlentities($returnedbooks);?></h3>
                          Times  Books Returned
                        </div>
                    </div>     
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <a href="viewstudent.php" style="text-decoration: none;"><div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <?php 
$sql3 ="SELECT id from student ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$regstds=$query3->rowCount();
?>
                            <h3><?php echo htmlentities($regstds);?></h3>
                           Registered Users
                        </div></a>
                    </div>
        </div>



 <div class="row">

 <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="manage-author.php" style="text-decoration: none;"><div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>
<?php 
$sql4 ="SELECT id from authors ";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$listdathrs=$query4->rowCount();
?>


                            <h3><?php echo htmlentities($listdathrs);?></h3>
                      Authors Listed
                        </div></a>
                    </div>
                    <div class="col-md-3 col-sm-3 rscol-xs-6">
                      <a href="manage-cat.php" style="text-decoration: none;"><div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-file-archive-o fa-5x"></i>
<?php 
$sql5 ="SELECT id from categories ";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$listdcats=$query5->rowCount();
?>

                            <h3><?php echo htmlentities($listdcats);?> </h3>
                           Listed Categories
                        </div></a>
                    </div>

            
             

        </div>     
