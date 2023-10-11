<section class="main">
    <table>
        <thead>
            <tr class="tablehead">
                <th>Team</th>
                <th>League</th>
                <th>Last-time-champions</th>
                <th>City</th>
                <th>Nickname</th>
                <th>url</th>
            </tr>
        </thead>

        <?php foreach ($teams as $key => $team) : ?>

            <tr>
                <td> <?php echo $key; ?> </td>
                <td> <?php echo $team['league']; ?> </td>
                <td> <?php echo $team['last-time-champions']; ?> </td>
                <td> <?php echo $team['city']; ?></td>
                <td> <?php
                        if (array_key_exists('nickname', $team)) {
                            echo $team['nickname'];
                        } else {
                            echo NULL;
                        }
                        ?>
                </td>
                <td><a href="<?php echo $team['url']; ?>"> <?php echo $team['url']; ?></a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</section>