<?php 

  class User {

    public $username;
    private $email;

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

    // getters
    public function getEmail(){
      return $this->email;
    }

    // setters
    public function setEmail($username){
      if(strpos($username, '@') > -1){
        $this->email = $username;
      };
    }

  }

  class AdminUser extends User {

    public $level;

    public function __construct($username, $email, $level){
      parent::__construct($username, $email);
      $this->level = $level; 
    }

  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
  $userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

  echo $userThree->level . '<br>';
  echo $userThree->username . '<br>';
  echo $userThree->getEmail() . '<br>';

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>