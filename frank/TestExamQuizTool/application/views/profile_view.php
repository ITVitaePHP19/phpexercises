<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Je bent ingelogd als <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/login/logout">Uitloggen</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Inloggen</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Registreren</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<legend>Examen toevoegen</legend>
            <div class="form-group">
				<label for="name">Examennaam</label>
				<input class="form-control" name="examname" placeholder="Examen" type="text" value="<?php echo set_value('examname'); ?>" />
				<span class="text-danger"><?php echo form_error('examname'); ?></span>
			</div>	
            <div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Verzenden</button>
			</div>

		</div>
	</div>

</div>
    
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>