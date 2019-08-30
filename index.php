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

  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

  echo $userOne->email;
  echo $userTwo->email;

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>