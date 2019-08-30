<?php 

  class User {

    public $username = 'ryu';
    public $email = 'ryu@thenetninja.co.uk';

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

  }

  $userOne = new User();
  $userTwo = new User();

  echo $userOne->username . '<br>';
  echo $userOne->email . '<br>';
  echo $userOne->addFriend() . '<br>';

  $userTwo->username = 'yoshi';
  $userTwo->email = 'yoshi@thenetninja.co.uk';

  echo $userTwo->username . '<br>';
  echo $userTwo->email . '<br>';

  //print_r(get_class_vars('User'));
  print_r(get_class_methods('User'));


?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>