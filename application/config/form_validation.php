<?php
$config = array(
    'subscribe-validation' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email',
        )
    )
);
