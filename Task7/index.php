<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Функциональный способ</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="main">
    <pre>  
    class Human {
        public $age = 0;
        public $name = "Ivan";
        public $surname = "Ivanov";
        protected $canIBeChanged = "FALSE";

        public function displayName() {
            echo $this->name . " " . $this->surname;
        }
        function checkProtected() {
            echo $this->canIBeChanged;
        }
    }
    class Woman extends Human {
        public $sex = "Male";
        public function shout() {
            echo "I am a Woman";
        }
    }

    class Man extends Human {
        public $sex = "Male";
        public function shout() {
            echo "I am a Man";
        }
    }
    $human = new Human();
    $woman = new Woman();
    $man = new Man();
    $human->displayName();
    $woman->name = "Maria";
    $woman->surname = "Default"; 
    $woman->displayName();
    $woman->shout();
    $man->shout();
    $man->checkProtected();
    $man->canIBeChanged = "TRUE";
    </pre>  
    <?php   
    class Human {
        public $age = 0;
        public $name = "Ivan";
        public $surname = "Ivanov";
        protected $canIBeChanged = "FALSE";

        public function displayName() {
            echo $this->name . " " . $this->surname;
        }
        function checkProtected() {
            echo $this->canIBeChanged;
        }
    }
    class Woman extends Human {
        public $sex = "Male";
        public function shout() {
            echo "I am a Woman";
        }
    }

    class Man extends Human {
        public $sex = "Male";
        public function shout() {
            echo "I am a Man";
        }
    }
    $human = new Human();
    $woman = new Woman();
    $man = new Man();
    $human->displayName();
    $woman->name = "Maria";
    $woman->surname = "Default"; 
    $woman->displayName();
    $woman->shout();
    $man->shout();
    $man->checkProtected();
    $man->canIBeChanged = "TRUE";
    ?>

</div>
</body>

</html>