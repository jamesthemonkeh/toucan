<?php require_once("includes/initialize.php"); ?>

<?php
if(isset($_POST['submit'])) {
		$member = new Member();
		$member->name   = $_POST['name'];
        $member->email  = $_POST['email'];
        $member->school = $_POST['school'];
		if($member->save()) {
			// Success
      $session->message("Member uploaded successfully.");
			redirect_to('http://www.google.co.uk');
		} else {
			// Failure
      $message = join("<br />", $member->errors);
		}
	}
?>

<html>
<head>
<title>Toucan Tech Detabase</title>
    <meta name="description" 
      content="Toucan Tech Detabase">
    <meta property="og:title" content="Toucan Tech Detabase">
<meta property="og:image" content="logo.jpg">
<meta property="og:description" content="Toucan Tech Detabase">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="images/favicon-32x32.png">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


</head>
<body>
    <nav>
        <div class="container">
            <img src="logo.JPG"/>
        </div>
    </nav>
    
    <section class="hero-image">
        <div class="container">
            <h1>Toucan Tech</h1>
            <h2>Schools Database</h2>
        </div>
    </section>

    <section class="view-database">
        <div class="container">
            <h2>View by School:</h2>
            <div class="select-box">
            <select name="school">
                <option value="null">Please select</option>
                <option value="harrow">Harrow School</option>
                <option value="watford">Watford School</option>
                <option value="chiswick">Chiswick School</option>
                <option value="pinner">Pinner School</option>
                <option value="wembley">Wembley School</option>
                <option value="westfield">Westfield School</option>
                <option value="hayes">Hayes School</option>
            </select>
            </div>
        </div>
    </section>

    <section class="add-to-database">
        <div class="container">
            <h2>Add Member:</h2>
            <form action="index.php" method="post" class="centre">
                <input type="text" name="name" placeholder="name" value=""/>
                <input type="email" name="email" placeholder="e-mail address" value=""/>
                <select required>
                    <option value="null">Please select</option>
                    <option value="harrow">Harrow School</option>
                    <option value="watford">Watford School</option>
                    <option value="chiswick">Chiswick School</option>
                    <option value="pinner">Pinner School</option>
                    <option value="wembley">Wembley School</option>
                    <option value="westfield">Westfield School</option>
                    <option value="hayes">Hayes School</option>
                </select>
                <input class="submit-button" type="submit" value="SUBMIT"/>
            </form>
            <?php echo output_message($message); ?>
        </div>
    </section>        

    <footer>
       <div class="container">
           <p>© ToucanTech Ltd All rights reserved</p>
        </div>
    </footer>



</body>
</html>


<?php if(isset($database)) { $database->close_connection(); } ?>