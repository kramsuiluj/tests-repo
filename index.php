<?php 

require_once 'db/conn.php';


$results = $crud->getData();

foreach ($results as $result) {

    echo $result['dummy_data1'] . '<br>';
    echo $result['dummy_data2'] . '<br>';

}

