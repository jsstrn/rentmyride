<h2> <?php echo $post['Comment']['title']; ?> </h2>
<hr></hr>
<p> <?php echo $post['Comment']['body']; ?> </p>

<p> <small>Created on: <?php echo $post['Comment']['created']; ?> 

Last modified on: <?php echo $post['Comment']['modified']; ?> </p>

</br>

<?php echo $this->html->link('Back', array('action'=>'index')). " | " . 
$this->html->link('Edit', array('action'=>'edit', $post['Comment']['id'])). " | " . 
$this->html->link('Delete', array('action'=>'delete', $post['Comment']['id']), NULL, 'Are you sure you want to delete this comment?'); 

echo $this->Like->like('Comment', $comment_id);
echo $this->Like->dislike('Comment', $comment_id);

?>