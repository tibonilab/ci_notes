<div class="row">
    <div class="col-md-4">
        <?php
            echo $this->load->view('notes/snippets/list', array(
                'list' => $list,
                'note' => $note
            ), TRUE);
        ?>
    </div>
    <div class="col-md-8">
        <?php if($note): ?>
            <?php echo $this->load->view('notes/snippets/item', array('note' => $note), TRUE); ?>
        <?php else: ?>
            No notes yet. <a href="<?php echo base_url('insert') ?>">Add one now</a>
        <?php endif ?>
    </div>
</div>
