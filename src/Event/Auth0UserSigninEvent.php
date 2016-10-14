<?php
namespace Drupal\auth0\Event;

use Symfony\Component\EventDispatcher\Event;

class Auth0UserSigninEvent extends Event {
  
  const NAME = 'auth0.signin';

  protected $user;
  protected $auth0Profile;

  public function __construct($user, $auth0Profile) {
    $this->user = $user;
  }

  public function getUser() {
    return $this->user;
  }

  public function getAuth0Profile() {
    return $this->auth0Profile;
  }
}