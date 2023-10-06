<?php

require __DIR__ . '/data.php';

$cities = [];

foreach ($teams as $key => $team) :

   $cities[] = $team['city'];


endforeach; ?>

<section class="footer">
   <h3> From <?php echo implode(', ', array_unique($cities)) . "."; ?><h3>
</section>