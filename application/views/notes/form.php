<?php

echo form_open(base_url('insert'));

echo form_input('note[subject]', set_value('note[subject]'), 'class="form-control" placeholder="Note subjects"');
echo form_textarea('note[body]', set_value('note[body]'), 'class="form-control" placeholder="Note body"');

?>

<?php if($error): ?>

    <div class="alert alert-danger">
        <?php echo $error ?>
    </div>

<?php endif ?>

<?php

echo form_submit('submit', 'Save', 'class="btn btn-default"');

echo form_close();

?>
