<?php

use App\User;

$flights = App\User::all();

foreach ($flights as $flight) {
    echo $flight->email;
}