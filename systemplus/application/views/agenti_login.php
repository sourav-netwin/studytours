<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title><?php echo $title ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/agenti.css" media="screen" /> 
<style type="text/css">

a{

	font-family: Monaco, Verdana, Sans-serif;
	font-size: 11px;
	color: #eee;
	text-align:center; 
 
}


</style>

</head>
<body>
<img src="<?php echo base_url(); ?>images/agenti_header.png" style="margin:10px 0 0 0">
<div id="container">
	<div id="bigbox">
			<div id="box_login" >
					<h2 >Agent Login</h2> <br>
					<?php echo form_open('agenti/login'); ?>
						<div class="input_form">Username</div><div><input type="text" name="username" value="" size="40" /></div>
						<div class="input_form">Password</div><div><input type="input" name="password" value="" size="40" /></div>
						<div style="margin:10px 0 35px 0"><input type="submit" value="Submit" /></div><br clear="all">
					</form>
			<div class="login_bottom">				
					<?php echo anchor('agenti/registrazioneFirst', 'REGISTER'); ?>
									-	<?php echo anchor('agenti/forgot_pass', 'FORGOT PASSWORD'); ?>

			</div>
			</div>
		<?php $this->load->view('agenti_footer');?>					
	</div>
</div>

</body>
</html>