<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {
		private $swChar;
    private $review;

    public function __construct($swChar, $review){
      $this->char = $swChar;
      $this->opinion = $review;
    }

    public function getOldChar() {
      return parent::getChar();
    }

    public function setChar($newChar) {
      $this->char = $newChar;
    }
    public function getOldOpinion() {
      return parent::getOpinion();
    }

    public function setOpinion($newOpinion) {
      $this->opinion = $newOpinion;
    }

    public function __destruct(){
      echo "<script>console.log('Destroyed child class');</script>";
    }
	}
?>
