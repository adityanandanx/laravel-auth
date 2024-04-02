<?php

namespace Database\Seeders\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FKTruncateHelper
{
  public static function truncate($model)
  {
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    $model::truncate();
    DB::statement('SET FOREIGN_KEY_CHECKS=1');
  }

}