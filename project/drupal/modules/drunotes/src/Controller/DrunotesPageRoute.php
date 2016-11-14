<?php
/**
@file
Contains \Drupal\first_module\Controller\FirstController.
 */

namespace Drupal\drunotes\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DrunotesPageRoute extends ControllerBase {
  public function content() {
   $nid=$this->getlatestNode("note");
    $response = new RedirectResponse("node/$nid/edit");
    $response->send();
  }

  /*
   * Get the latest node in the system
   */
  public function getlatestNode($type) {
    $connection = Database::getConnection();
    $query = $connection->select('node','n')
      ->fields('n', array('nid'))
      ->orderby('n.nid','DESC')
      ->condition('n.type', $type, '=');
    $data= $query->execute();
    $results = $data->fetchAll(\PDO::FETCH_OBJ);
    return $results[0]->nid;
  }
}