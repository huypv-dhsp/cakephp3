<h1>Users</h1>
<table>
    <tr>
        <th>Email</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <?= $this->Html->link($user->email, ['action' => 'view', $user->id]) ?>
            </td>
            <td>
                <?= $user->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $user->modified->format(DATE_RFC850) ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
