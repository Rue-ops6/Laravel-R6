<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();




/* Mailtrap have a limit of 100 msg only
Schedule::command('appsig:mailable')->everyFourHours();#command signiture then run it w/ schedule work  */
Schedule::command('appsig:expiration')->everyMinute();#command signiture then run it w/ schedule work
schedule::command('appsig:backupDB')->daily();
