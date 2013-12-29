<h1>Add a new user</h1>
<p>Enter the user details below to add a new user.</p>
<?php
	echo $this->Form->create('User', array('type' => 'post'));
	echo $this->Form->input('group_id', array(
		'type' => 'select', 
		'label' => 'Role', 
		'options' => array('1' => 'Admin', '2' => 'User'),
		'empty' => 'Choose one',
		'required'=>'false'
		));
	echo $this->Form->input('username', array('required'=>'false'));
	echo $this->Form->input('password', array('required'=>'false'));
	echo $this->Form->input('confirm_password', array('type'=>'password','required'=>'false'));
	echo $this->Form->input('name', array('required'=>'false'));
	echo $this->Form->input('license', array('label' => 'Driver\'s License', 'required'=>'false'));
	echo $this->Form->input('email', array('required'=>'false'));
	echo $this->Form->input('mobile', array('required'=>'false'));
	echo $this->Form->input('address', array('required'=>'false'));
	echo $this->Form->input('postal_code', array('required'=>'false'));
	echo $this->Form->input('picture', array('type' => 'file'));
	echo $this->Form->submit('Add User');
	echo $this->Form->button('Reset', array('type' => 'reset'));
	//echo $this->Form->button('Cancel', array('action' => 'index'));
?>

</br>
<?php echo $this->html->link('Back', array('action'=>'index'));?>