<?php require_once 'HtmlElements.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>OOPS HTML 5 Form Elements Generation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2 style="color:#337ab7;">Object oriented way of generating HTML 5 form elements.</h2>
<form role="form" method="post" action="submit.php">

<div class="form-group">
  <label for="name">Name:</label>
  <?php
  	echo HtmlElements::generateTextBoxOrButton(array(
	'name' => 'name',
	'id' => 'name',
	'type' => 'text',
	'class' => 'form-control',
	'placeholder' => 'Enter name',
	'value' => NULL,
	'required' => 'required'		
	));
  ?>
</div>


<div class="form-group">
  <label for="email">Email:</label>
  <?php
  	echo HtmlElements::generateTextBoxOrButton(array(
	'name' => 'email',
	'id' => 'email',
	'type' => 'email',
	'class' => 'form-control',
	'placeholder' => 'Enter email',
	'value' => NULL,
	'required' => 'required'		
	));
  ?>
</div>


<div class="form-group">
  <label for="password">Password:</label>
  <?php
  	echo HtmlElements::generateTextBoxOrButton(array(
	'name' => 'password',
	'id' => 'password',
	'type' => 'password',
	'class' => 'form-control',
	'placeholder' => 'Enter password',
	'value' => NULL,
	'required' => 'required'	
	));
  ?>
</div>

<div class="radio">
      <?php
      	echo HtmlElements::generateRadioButtonOrCheckBoxGroup(array(
			'name' => 'gender',
			'type' => 'radio',
			'class' => 'radio-inline',
			'options' => array(
				'1' => 'Male',
				'2' => 'Female'
			),
			'label' => TRUE, // If set to true, it will add label tag 
			'checked' => array(),
			'required' => 'required'
		));
      ?>      
</div>

<div class="form-group">
  <label for="address">Address:</label>
  <?php
  	echo HtmlElements::generateTextArea(array(
	'name' => 'address',
	'id' => 'address',
	'class' => 'form-control',
	'rows' => 5,
	'cols' => 50,
	'placeholder' => 'Enter address',
	'value' => NULL,
	'required' => 'required'	
	));
  ?>
</div>

<div class="form-group">
  <label for="city">City:</label>
  <?php
  	echo HtmlElements::generateTextBoxOrButton(array(
	'name' => 'city',
	'id' => 'city',
	'type' => 'text',
	'class' => 'form-control',
	'placeholder' => 'Enter city',
	'value' => NULL,
	'required' => 'required'	
	));
  ?>
</div>


<div class="form-group">
  <label for="country">Country:</label>
  <?php
  	echo HtmlElements::generateDropdown(array(
	'name' => 'country',
	'id' => 'country',
	'class' => 'form-control',
	'options' => array(
			'India' => 'India',
			'United States' => 'United States',
			'Australia' => 'Australia',
			'UAE' => 'UAE'
	),
	'selected' => NULL,
	'required' => 'required'	
	));
  ?>
</div>

<div class="checkbox">
      <?php
      	echo HtmlElements::generateRadioButtonOrCheckBoxGroup(array(
			'name' => 'terms',
			'type' => 'checkbox',
			'class' => 'checkbox-inline',
			'options' => array(
				'1' => 'I agree with all the terms and conditions.'
			),
			'label' => TRUE, // If set to true, it will add label tag 
			'checked' => array(),
			'required' => 'required'
		));
      ?>      
</div>

  <?php
  	echo HtmlElements::generateTextBoxOrButton(array(
	'name' => 'submit',
	'id' => 'submit',
	'type' => 'submit',
	'class' => 'btn btn-primary',
	'placeholder' => NULL,
	'value' => 'Submit',
	'required' => NULL
	));
  ?>


</form>
</body>
</html>