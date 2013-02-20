<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cardiff RoboWars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="bootstrap/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active">  <li><a href="mailto:hoggardh@cardiff.ac.uk?Subject=Robocode">Contact</a></li>
        </ul>
        <h3 class="muted">Cardiff University Computer Science</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Cardiff Robocode</h1>

        <p class="lead">Compete against each other to build the best AI robot.</p>
     <a class="btn btn-large" role="button" data-toggle="modal" href="#addTeam">Sign up Team</a>
   <a class="btn btn-large btn-success" role="button" data-toggle="modal" href="#addPlayer">Signup Individual</a>
      </div>

      <hr>

<div id="addTeam" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-body">
 <form class="form-addTeam" method="post" action="addteam.php" id="addTeam">
        <h2 class="form-signin-heading">Please register</h2>
        <input type="text" class="input-block-level" id="name" placeholder="Team Name">
       <input type="text" class="input-block-level" id="email" placeholder="Email Address">
        <input type="text" id="number" class="input-block-level" placeholder="Number of Members">
  <input type="text" id="members" class="input-block-level" placeholder="Member Names">

        <button class="btn btn-large btn-primary" id="submit" type="submit">Sign in</button>

      </form>
</div>
</div>
<div id="addPlayer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-body">
 <form class="form-addPlayer" id="addPlayer" method="post" action="adduser.php">
        <h2 class="form-signin-heading">Please register</h2>
        <input type="text" class="input-block-level" id="fullname" placeholder="Name">
       <input type="text" class="input-block-level" id="emailaddress" placeholder="Email Address">

Need Team?:
<select name="need_team" id="need_team">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>        

        <button class="btn btn-large btn-primary" type="submit">Sign Up</button>
      </form>
</div>
</div>    
<?php
include 'config.php';
$teams = mysql_query("SELECT * FROM hackathon_teams");
?>
<h2>Registered Teams</h2>

<table class="table">
        <thead>  
          <tr>  
            <th>Team Name</th>  
            <th>Members</th>  
            <th>Member Names</th>  
          </tr>  
        </thead> 
        <tbody>  
	
<?php
	while($row =mysql_fetch_array($teams))
	    {
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['no_members'] . "</td>";
		echo "<td>" . $row['member_names'] . "</td>";
		echo "</tr>";
		
	    }

?> 

        </tbody>  
    </table>
<h2>Registered Players</h2>
<?php
$players = mysql_query("SELECT * FROM hackathon_players");
?>

<table class="table">
        <thead>  
          <tr>  
            <th>Full Name</th>  
            <th>Looking for Team?</th>  
          </tr>  
        </thead> 
        <tbody>  
	
<?php
	while($row =mysql_fetch_array($players))
	    {
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['need_team'] . "</td>";
		echo "</tr>";
		
	    }

?> 

        </tbody>  
    </table>


      <div class="row-fluid marketing">
        <div class="span12">
          <h4>About RoboCode</h4>
          <p><a href="http://robocode.sourceforge.net/docs/ReadMe.html">Robocode Readme</a></p><p><a href="http://www.ibm.com/developerworks/library/j-robocode/">Robocode Tutorial</a></p>


               </div>

   
<hr>
      <div class="footer">
        <p>Made with Bootstrap by Henry Hoggard</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
    $("#addTeam").submit(function()
    {
        //remove all the class add the messagebox classes and start fading
        //check the username exists or not from ajax
        $.post("addteam.php",{ name:$('#name').val(),number:$('#number').val(),members:$('#members').val(), email:$('#email').val() } ,function(data)
        {
              document.location.reload(true);
               
                 
        });
        return false; //not to post the  form physically
    });

 $("#addPlayer").submit(function()
    {
        //remove all the class add the messagebox classes and start fading
        //check the username exists or not from ajax
        $.post("adduser.php",{ name:$('#fullname').val(),need_team:$('#need_team').val(),  email:$('#emailaddress').val() } ,function(data)
        {
              document.location.reload(true);
        });
        return false; //not to post the  form physically
    });

});
</script>
  </body>
</html>

