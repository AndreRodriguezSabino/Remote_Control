<?php
    require_once 'Controller.php';
    class RemoteControl implements Controller{
        private $volume;
        private $switchedOn;
        private $playing;

        public function __construct(){
            $this->volume =50;
            $this->switchedOn = false;
            $this->playing = false;
        }

        public function turnOn(){
            $this->setSwitchedOn(true);
        }
        public function turnOff(){
            $this->setSwitchedOn(false);
        }
        public function openMenu(){
            echo "<br>Is it on? " . (($this->getSwitchedOn())?"YES":"NO");
            echo "<br> Is it playing? " . (($this->getPlaying())?"YES":"NO");
            echo "<br>Volume: " . $this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "<br>";
        }
        public function closeMenu(){
            echo "<br>Closing menu...";
        }
        public function volumeUp(){
            if($this->getVolume()){
                $this->setVolume($this->getVolume() + 5);
            }
        }
        public function volumeDown(){
            if($this->getVolume()){
                $this->setVolume($this->getVolume() - 5);
            }
        }
        public function muteOn(){
            if($this->getSwitchedOn() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function muteOff(){
            if($this->getSwitchedOn() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if($this->getSwitchedOn() && ! $this->getPlaying()){
                $this->setPlaying(true);
            }
        }
        public function pause(){
            if($this->getSwitchedOn() && $this->getPlaying()){
                $this->setPlaying(false);
            }
        }

        private function getVolume(){
            return $this->volume;
        }
        private function setVolume($vol){
            $this->volume = $vol;
        }
        private function getswitchedOn(){
            return $this->switchedOn;
        }
        private function setSwitchedOn($so){
            $this->switchedOn = $so;
        }
        private function getPlaying(){
            return $this->playing;
        }
        private function setPlaying($pl){
            $this->playing = $pl;
        }
    }