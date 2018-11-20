<?php

use App\User;
use App\Pitch;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $users = factory(User::class)->create();
    $users->each(function($user) {

      $pitches = factory(Pitch::class, 3)->create();
      $user->pitches()->saveMany($pitches);

    });
  }
}
