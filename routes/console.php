<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('mo', function () {
    $this->comment("monther alzahar");
})->purpose('Display developer name ')->hourly();

Artisan::command('ry', function () {
    $this->comment(100*2.3);
})->purpose('Display developer name ')->hourly();
