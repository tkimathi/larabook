<?php
$I = new FunctionalTester($scenario);
$I->am('A Larabook Member');
$I->wantTo('Login to my Account');

$I->signIn();

$I->seeInCurrentUrl('/statuses');
$I->see('Welcome back');

$I->assertTrue(Auth::check());