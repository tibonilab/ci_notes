<?php

$config = array(
    'notes/form' => array(
        array(
            'field' => 'note[subject]',
            'rules' => 'trim|required',
            'label' => 'Note subject'
        ),
        array(
            'field' => 'note[body]',
            'rules' => 'trim|required',
            'label' => 'Note body'
        )
    )
);
