<?php if ($data): ?>
    <?php foreach ($data as $contact): ?>
        <tr>
            <td><a href=""><?= $contact->firstName; ?></a></td>
            <td><?= $contact->lastName; ?></td>
            <td><?= $contact->phone; ?></td>
        </tr>
    <?php endforeach ?>
<?php endif ?>