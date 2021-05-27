<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    
public function redirectToProvider() {

    return Socialite::driver('github')->redirect();

}

  public function handleProviderCallback() {

    $user = Socialite::driver('github')->user();

    var_dump($user);

  }

  public function redirectToProviderAzure() {

    return Socialite::driver('azure')->redirect();

  }
    
    
    


}
