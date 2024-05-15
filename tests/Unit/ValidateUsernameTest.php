<?php

test('User already exists', function () {
    $userController = new \App\Http\Controllers\UserController();
    $response = $userController->checkUserExists('seifalgohary');
    expect($response)->toBeTrue();
});
