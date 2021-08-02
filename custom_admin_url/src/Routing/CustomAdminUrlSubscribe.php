<?php

namespace Drupal\custom_admin_url\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events and enables us to alter them.
 */
class CustomAdminUrlSubscribe extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {

    $user_login_route = $collection->get('user.login');
    $user_login_route->setPath('/boat/login');

    $user_route = $collection->get('user.page');
    $user_route->setPath('/boat');

  }

}
