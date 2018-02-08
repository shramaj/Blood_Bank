<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome-animation.css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">-->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="Roboto_Condensed/RobotoCondensed-Light.ttf">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">


    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>test</title>


<style>
#btn
{
position:relative;
margin-left:90%;
}
</style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="border: 0px;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                 <li><a class="page-scroll" href="admin1.php"> BACK</span></a></li>
 
                <li><a class="page-scroll" href="logout.php">LOGOUT</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<h1 class="text-center" style="color: #000;margin-top: 90px;"> ORGANISED EVENTS</h1>



<?php
 
	 
{
$con = new MongoClient();
	 if($con){
		$db = $con->bloodbank; //select Database
		$collection = $db->org;    //	Select Collection
		 
		$result = $collection->find();
		$i=1;	
 
 		foreach($result as $doc)
{

 
?>

<div class="container">
            
        <div class="row" style="margin-top: 50px;margin-bottom: 60px">
            <div class="row">
                <div class="col-md-12">
<br/>
                    <h2 class="text-center" style="color: #000000;margin-bottom: 30px">Event <?php echo $i; ?></h2>
                </div>
                 

 
            <div class="col-md-12" style="border: 1px solid black">
                <table class="table table-striped" style="margin-top: 15px">
                    <tbody style="margin-top: 15px">
                    <tr>
                        <td><b>Event Name</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['cname'];?></td>
                    </tr>

                    <tr>
                        <td><b>Place</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['place'];?></td>
                    </tr>

                    <tr>
                        <td><b>Date</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['date'];?></td>
                    </tr>

                    <tr>
                        <td><b>Time</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['time'];?></td>
                    </tr>

                    <tr>
                        <td><b>Sponsor</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['sponsor'];?></td>
                    </tr>

                    <tr>
                        <td><b>Total no of donors</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['t_n_d'];?></td>
                    </tr>
                    <tr>
                        <td><b>Total units collected</b></td>
                        <td style="padding-left: 85px"><?php echo $doc['events']['no'];?></td>
                    </tr>
                    </tbody>
                </table>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" >
                    <div class="panel panel-default" role="tab" id="heading<?php echo $i;?>" >
                        <div class="panel-heading">
                            <h4 class="panel-title">
                               <a role="button" class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="false" aria-controls="collapse<?php echo $i;?>">Number Of Units</a>
                            </h4>
                      </div>
                        <div id="collapse<?php echo $i;?>" class="panel-collapse <?php echo ($i==2 ? 'collapse out': 'collapse');?>" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
                            <div class="panel-body" style="padding-left: 80px">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Blood Group</th>
                                        <th>Number Of Units</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><b>A+</b></td>
                                        <td><?php echo $doc['units']['ap'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>A-</b></td>
                                        <td><?php echo $doc['units']['an'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>B+</b></td>
                                        <td><?php echo $doc['units']['bp'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>B-</b></td>
                                        <td><?php echo $doc['units']['bn'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>AB+</b></td>
                                        <td><?php echo $doc['units']['abp'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>AB-</b></td>
                                        <td><?php echo $doc['units']['abn'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>O+</b></td>
                                        <td><?php echo $doc['units']['op'];?></td>
                                    </tr>
                                    <tr>
                                        <td><b>O-</b></td>
                                        <td><?php echo $doc['units']['on'];?></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-1"></div>

 <?php
	$i=$i+1;
}
 
	}	
 
	}
	?>
   <br/> 
<script rel="script" type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
<script rel="script" type="text/javascript" src="js/wow.min.js"></script>
<script rel="script" type="text/javascript" src="js/bootstrap.js"></script>
<script rel="script" type="text/javascript" src="css/script.js"></script>
<br/>
<br/>

 
 
</body>
 
</html>
