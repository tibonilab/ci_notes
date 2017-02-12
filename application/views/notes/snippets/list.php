<ul class="nav nav-pills nav-stacked">
    <?php foreach($list as $item): ?>
    <li role="presentation" <?php if($note->id === $item->id) echo 'class="active"'?>>
        <a href="<?php echo base_url($item->id) ?>"><?php echo $item->subject ?></a>
    </li>
    <?php endforeach ?>
</ul>
