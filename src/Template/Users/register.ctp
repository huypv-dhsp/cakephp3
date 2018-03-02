<!-- File: src/Template/Articles/add.ctp -->

<h1>Register for a new user</h1>
<?php
echo $this->Form->create($user);
// Hard code the user for now.
echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
echo $this->Form->control('email',['type' =>'email']);
echo $this->Form->control('password', ['password' => 'password']);
echo $this->Form->button(__('Register'));
echo $this->Form->end();
?>
