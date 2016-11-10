<?php
	// This is the file for the parent class

  class ParentClass{
    private $swChar;
    private $review;

    public function __construct($swChar, $review){
      $this->char = $swChar;
      $this->opinion = $review;
    }

    public function getChar(){
      return $this->char;
    }

    public function getOpinion(){
      return $this->opinion;
    }

    private function getMovie(){
      if($this->char = "Young Anakin" || $this->char = "Mediclorians"){
        return "Episode I";
      }
      else if($this->char = "Anakin" || $this->char = "Obiwan"){
        return "Episode II or Episode III";
      }
      else if($this->char = "Force Awakens"){
        return "New Trilogy";
      }
      else{
        return "Original Trilogy (the best trilogy)";
      }
    }

    private function getReview(){
      if($this->opinion == "dumb"){
        return "Mediclorians have got to be the dumbest thing added, along with Anakin's mother not having a father.
                How could they ruin the fun of the force by making it so that you have to be gifted to be a jedi";
      }
      if($this->opinion == "odd"){
        return "On one hand you see how Vader was before the original Trilogy but then you have podracing
                which filled too much of the movie and was pointless";
      }
      if($this->opinion == "okay"){
        return "I was okay with this and have no opinion to decide if I like it or disike it";
      }
      if($this->opinion == "awesome"){
        return "I absolutely loved this and can't say anything bad at all. I hope they make more stuff like this";
      }

    }

    public function __toString(){
      $first = $this->getChar() . " from " . $this->getMovie();
      $second = "was " . $this->getOpinion();

      return $first . "<br>" . $second . "<br>" . $this->getReview() . "<br>";
    }
  }
?>
