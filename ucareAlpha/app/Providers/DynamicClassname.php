<?php
namespace App\Providers;

use App\voucher;
use Illuminate\Support\ServiceProvider;

class DynamicClassname extends ServiceProvider
{
  public function boot(){
      view()->composer('*',function($view){
        $view->with('voucher_array',voucher::all());
      });
  }
}
