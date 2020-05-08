<?php

namespace App;

class LoginControllerTest extends TestCase{

    use RefreshDatabase;
    use RefreshDatabase, WithFaker;
    public function register_creates_and_authenticates_a_user()
    {
        $name = $this->faker->name;
        $email = $this->faker->safeEmail;
        $password = $this->faker->password(8);

        $response = $this->post('register', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        $response->assertRedirect(route('home'));

        $user = User::where('email', $email)->where('name', $name)->first();
        $this->assertNotNull($user);

        $this->assertAuthenticatedAs($user);
    }

      
      public function login_displays_validation_errors()
      {
          $response = $this->post('/login', []);
          $response->assertStatus(302);
          $response->assertSessionHasErrors('email');
      }
  
      public function login_authenticates_and_redirects_user()
      {
          $user = factory(User::class)->create();
  
          $response = $this->post(route('login'), [
              'email' => $user->email,
              'password' => 'password'
          ]);
  
          $response->assertRedirect(route('home'));
          $this->assertAuthenticatedAs($user);
      }

}