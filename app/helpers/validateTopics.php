<?php 

function validateTopic($topics){
    
    $errors = array();

    if(empty($topics['name'])){
        array_push($errors,'Topic Name is required');
    }

    $existingTopic = selectOne('topics', ['name' => $topics['name']]);
    if($existingTopic){
        if(isset($topics['update-topic']) && $existingTopic['id'] != $topics['id']){
            array_push($errors, 'Name already exists');
        }

        if(isset($topics['add-topic'])){
            array_push($errors, 'Name already exists');
        }
    }

    return $errors;
}