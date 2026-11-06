<?php

abstract class Category {
  abstract public function getMyCategory();
}

class Attualita extends Category {
  public function getMyCategory() {
    echo "Attualità\n";
  }
}

class Sport extends Category {
  public function getMyCategory() {
    echo "Sport\n";
  }
}

class Gossip extends Category {
  public function getMyCategory() {
    echo "Gossip\n";
  }
}

class Storia extends Category {
  public function getMyCategory() {
    echo "Storia\n";
  }
}

// Test
$cat1 = new Attualita();
$cat1->getMyCategory();

$cat2 = new Sport();
$cat2->getMyCategory();

$cat3 = new Gossip();
$cat3->getMyCategory();

$cat4 = new Storia();
$cat4->getMyCategory();

?>