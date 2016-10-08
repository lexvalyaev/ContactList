<?php


use \app\Yii;
use \app\models\Contacts;

require_once 'vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();
$contact = new app\models\Contacts();
$contact->name = $faker->name;
$contact->phone_number=$faker->phoneNumber;
$contact->email=$faker->email;
$contact->birthday = $faker->dateTime;
$contact->save();
