<<<<<<< HEAD

Conversation opened. 1 unread message.

Skip to content
Using Gmail with screen readers
Search



Gmail
COMPOSE
Labels
Inbox
Starred
Important
Sent Mail
Drafts (1)
Circles
Personal
Travel
More 
Hangouts

 
 
 
  More 
1 of 235  
 
Print all In new window
index.php 
Inbox
x 

Dee Kaur
Attachments22:08 (3 minutes ago)

to Aimi, me, Christina, Junnai 
Attachments area
	
Click here to Reply, Reply to all or Forward
2.87 GB (19%) of 15 GB used
Manage
Terms - Privacy
Last account activity: 0 minutes ago
Details
1 more
Dee Kaur
Add to circles

Show details


<?php
// This is the home page of our application
?>

<!doctype html>
<html>
<head><title>Women in Tech Blog</title></head>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Women In Tech Blog</h4>
      
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Login</a></li>
        <li><a href="#section3">About</a></li>
        <li><a href="#section3">Read blogs</a></li>
      </ul><br>
      
    </div>

    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2>Bridget Codes Diary</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Jenny, Apr 7, 2017</h5>
      <h5><span class="label label-danger">Codes</span> <span class="label label-primary">Diary</span></h5><br>
      <p>Guys, write something here please! </p>
      
      
      <h2>Tech Now or Never...</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Vicky, Apr 6, 2017</h5>
      <h5><span class="label label-danger">Tech</span></h5><br>
      <p>YOU need to choose whether its now or never! </p>
      <hr>

      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">16</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpeg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Devina <small>Apr 6, 2017, 9:12 PM</small></h4>
          <p>Keep up the GREAT work!</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpeg" class="img-circle" height="65" width="65" alt="Missing">
        </div>
        <div class="col-sm-10">
          <h4>Victoria <small>Apr 6, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read your exciting journey. </p>
          <br>
          <p><span class="badge">13</span> Comments</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpeg" class="img-circle" height="65" width="65" alt="Missing">
            </div>
            <div class="col-xs-10">
              <h4>Aimi  <small>Apr 5, 2017, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            <h4>Christina  <small>Apr 5, 2017, 8:34 PM</small></h4>
              <p>Amazing!!! Keep it up..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  &copy; <?php
  $fromYear = 2000; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Women In Tech
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />


	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

	<body>

		<header>

			

			

		</header>

		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">

<h3>Women In Tech</h3>

<p class="footer-links">
<a href="#">Home</a>
					·
<a href="#">Blog</a>
										·
<a href="#">About</a>
					·
<a href="#">Faq</a>
					·
<a href="#">Contact</a>
</p>

<p class="footer-company-name">Women In Tech &copy; 2017</p>

<div class="footer-icons">

<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
<a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
<a href="https://github.com"><i class="fa fa-github"></i></a>

</div>
</div>

<div class="footer-right">

<p>Contact Us</p>

<form action="#" method="post">

<input type="text" name="email" placeholder="Email" />
<textarea name="message" placeholder="Message"></textarea>
<button>Send</button>

</form>

</div>

</footer>

</body>

</html>

</footer>

</body>
</html>

=======

    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2>Bridget Codes Diary</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Jenny, Apr 7, 2017</h5>
      <h5><span class="label label-danger">Codes</span> <span class="label label-primary">Diary</span></h5><br>
      <p>Guys, write something here please! </p>
      
      
      <h2>Tech Now or Never...</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Vicky, Apr 6, 2017</h5>
      <h5><span class="label label-danger">Tech</span></h5><br>
      <p>YOU need to choose whether its now or never! </p>
      <hr>

      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">16</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpeg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Devina <small>Apr 6, 2017, 9:12 PM</small></h4>
          <p>Keep up the GREAT work!</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpeg" class="img-circle" height="65" width="65" alt="Missing">
        </div>
        <div class="col-sm-10">
          <h4>Victoria <small>Apr 6, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read your exciting journey. </p>
          <br>
          <p><span class="badge">13</span> Comments</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpeg" class="img-circle" height="65" width="65" alt="Missing">
            </div>
            <div class="col-xs-10">
              <h4>Aimi  <small>Apr 5, 2017, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            <h4>Christina  <small>Apr 5, 2017, 8:34 PM</small></h4>
              <p>Amazing!!! Keep it up..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  &copy; <?php
  $fromYear = 2000; 
  $thisYear = (int)date('Y'); 
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Women In Tech
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, contact, form, icons" />


	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-contact-form.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

	<body>

		<header>

			

			

		</header>

		<!-- The content of your page would go here. -->

		<footer class="footer-distributed">

			<div class="footer-left">

<h3>Women In Tech</h3>

<p class="footer-links">
<a href="#">Home</a>
					·
<a href="#">Blog</a>
										·
<a href="#">About</a>
					·
<a href="#">Faq</a>
					·
<a href="#">Contact</a>
</p>

<p class="footer-company-name">Women In Tech &copy; 2017</p>

<div class="footer-icons">

<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
<a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
<a href="https://github.com"><i class="fa fa-github"></i></a>

</div>
</div>

<div class="footer-right">

<p>Contact Us</p>

<form action="#" method="post">

<input type="text" name="email" placeholder="Email" />
<textarea name="message" placeholder="Message"></textarea>
<button>Send</button>

</form>

</div>

</footer>

</body>

</html>

</footer>

</body>
</html>



=======
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "please work better this time";
        echo "hey it's aimi here!";
        echo "hey it's aimi here!";
        echo "hope this works....";
        
      ?>
    </body>
</html>
>>>>>>> refs/remotes/origin/vicki
