<?php require __DIR__ . '/data.php'; ?>

<table>
    <tr>
        <th>Team</th>
        <th>League</th>
        <th>Last-time-champions</th>
        <th>City</th>
        <th>url</th>
    </tr>

    <?php foreach ($teams as $key => $team) : ?>

        <tr>
            <td> <?php echo $key; ?> </td>
            <td> <?php echo $team['league']; ?> </td>
            <td> <?php echo $team['last-time-champions']; ?> </td>
            <td> <?php echo $team['city']; ?> </td>
            <td> <?php echo $team['url']; ?> </td>
        </tr>

    <?php endforeach; ?>
</table>