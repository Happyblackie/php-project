<?php 
    //classes
    class User 
    {
        //class properties
        private $email;
        private $name;

        

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

        //getters
        public function getName() //accessing private property using public function
        {
            return $this->name;
        }

        //setters
        public function setName($name)
        {
            if(is_string($name) && strlen($name) > 1)
            {
                $this->name =$name;
                return "name has been updated to $name";
            }
            else
            {
                return 'not a valid name';
            }
        }
    }

    

    $userTwo = new User('happy','otieno@gmail.com');
    // $userTwo->name = 'faith';
    // echo $userTwo->name;

    //echo $userTwo->getName();
    echo $userTwo->setName('blackie');
    //echo $userTwo->getName();
    

?>