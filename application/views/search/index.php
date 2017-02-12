<ul class="nav nav-pills nav-stacked">
    <?php foreach($results as $item): ?>
    <li role="presentation">
        <a href="<?php echo base_url($item->id) ?>"><?php echo $item->subject ?></a>
    </li>
    <?php endforeach ?>
</ul>
