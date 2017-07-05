<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
	label { display: block; } .errors { color: red; }
</style>
<body>
<h1>Login</h1>

<div class="container-fluid">
	<div class="row col-xs-4">


<?php echo form_open('admin'); ?>
<p>
	<?php 
		echo form_label('Email: ', 'email');
		echo form_input('email', set_value('email'), 'id="email"class="form-control"');
	?>	
	<br>
	<?php 
		echo form_label('Senha: ', 'senha');
		echo form_password('senha', '', 'id="senha" class="form-control"');
	?>
</p>
<?php echo form_submit('submit', 'Login'); ?>
<?php echo form_close(''); ?>

<div class="errors"> <?php echo validation_errors(); ?> </div>

</div>
</div>
</body>
</html>