<?php
    namespace Models;

    class Ticket{
        private $id;
        private $date;
        private $time;
        private $movieshow;
        private $user;
        private $purchase;

        public function __construct(){
            
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
            return $this;
        }

        public function getDate()
        {
            return $this->date;
        }

        public function setDate($date)
        {
            $this->date = $date;
            return $this;
        }

        public function getTime()
        {
            return $this->time;
        }

        public function setTime($time)
        {
            $this->time = $time;
            return $this;
        }
 
        public function getMovieshow()
        {
            return $this->movieshow;
        }

        public function setMovieshow($movieshow)
        {
            $this->movieshow = $movieshow;
            return $this;
        }

        public function getUser()
        {
            return $this->user;
        }

        public function setUser($user)
        {
            $this->user = $user;
            return $this;
        }

        public function getPurchase()
        {
                return $this->purchase;
        }
 
        public function setPurchase($purchase)
        {
                $this->purchase = $purchase;

                return $this;
        }
    }
?>