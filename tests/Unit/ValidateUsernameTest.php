<?php

uses(\Illuminate\Foundation\Testing\TestCase::class);

test('User does not exist', function () {
    $userController = new \App\Http\Controllers\UserController();
    $response = $userController->checkUserExists('shawkyebrahimdddd');
    expect($response)->toBe(false);
});
