<?php

$steps->Given('/^I am not authenticated$/', function($world) {
    $session = $world->getSession();
    $session->visit('users/logout');
});

$steps->Given('/^a user exists with email: "([^"]*)"$/', function($world, $arg1) {
    echo "string";
});

$steps->When('/^I go to the home page$/', function($world) {
    $session = $world->getSession();
    $session->visit('/cakephp/');
});
