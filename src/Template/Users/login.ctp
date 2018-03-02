<!-- File: src/Template/Articles/add.ctp -->

<h1>Login</h1>
<?php
echo $this->Form->create();
// Hard code the user for now.
echo $this->Form->control('email');
echo $this->Form->control('password', ['password' => 'password']);
echo $this->Form->button(__('Login'));
echo $this->Form->end();
?>
