<h2> <?php echo $image['Image']['id']; ?> </h2>

<p> <?php echo $image['Image']['userid']; ?> </p>

<p> <?php echo $image['Image']['image']; ?> </p>


<p> <small>Created on: <?php echo $image['Image']['created']; ?> 

Last modified on: <?php echo $image['Image']['modified']; ?> </p>

</br>

<?php echo $this->html->link('Back', array('action'=>'index')). " | " . 
$this->html->link('Edit', array('action'=>'edit', $image['Image']['id'])). " | " . 
$this->html->link('Delete', array('action'=>'delete', $image['Image']['id']), NULL, 'Are you sure you want to delete this image?'); ?>