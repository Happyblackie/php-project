<?php 
    //classes
    class User 
    {
        //class properties
        public $email;
        public $name;

        //contsructor function only runs when class instance/object runs
        // public function __construct()
        // {
        //     // $this->email = 'happy@email.com';
        //     // $this->name = 'happy';

        // }


        public function __construct($name,$email)
        {
            $this->email = $email;
            $this->name = $name;
        }

        //public function
        public function login()
        {
            // echo 'the user logged in ';
            echo $this->name. 'logged in ';
        }
    }

    //instantiating class/ class object
    // $userOne = new User();
    // $userOne->login();
    // echo $userOne->email;

    $userTwo = new User('happy','otieno@gmail.com');
    // echo $userTwo->name;
    // echo $userTwo->email;
    $userTwo->login();


?>