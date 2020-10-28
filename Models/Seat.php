<?php
    namespace Models;

    class Seat{
        private $numAsiento;
        private $occupied;
        private $movieShow;

        public function getNumSeat()
        {
            return $this->numAsiento;
        }

        public function setNumSeat($numAsiento)
        {
            $this->numAsiento = $numAsiento;
        }
 
        public function getOccupied()
        {
            return $this->occupied;
        }

        public function setOccupied($occupied)
        {
            $this->occupied = $occupied;
            
        }

        public function setMovieShow($movieShow){
            $this->movieShow = $movieShow;
        }

        public function getMovieShow(){
            return $this->movieShow;
        }
    }
?>