<h1><?= h($user->email) ?></h1>
<p><?= h($user->password) ?></p>
<p><small>Created: <?= $user->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?></p>
<p><?= $this->Html->link('Delete', ['action' => 'delete', $user->id]) ?></p>
