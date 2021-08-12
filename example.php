<?php
    abstract class a
    {
        protected $name;

        public function start()
        {
            echo "Vehicle Start";
        }

        public function stop()
        {
            echo "Vehicle Stop";
        }
        abstract public function milage();

        public function setName($name)
        {
            $this->name= $name;
        }
    }

    class b extends a
    {
        public function milage()
        {
            echo "I am " . $this ->name . "</br>";
            echo "My milage range is - 15 to 22km/l.";
        }
    }

    class c extends a
    {
        public function milage()
        {
            echo "I am " . $this ->name . "</br>";
            echo "My milage range is 30-40/km/l.";
        }
    }

    $obj=new c;
    $obj->setName("Bullet");
    $obj->milage();
?>