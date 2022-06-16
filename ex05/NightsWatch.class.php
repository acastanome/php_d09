<?php
    class NightsWatch {

        private $recruits = array();

        public function recruit($someone) {
            $this->$recruits[] = $someone;
        }

        public function fight() {
            foreach ($this->$recruits as $key => $value)
            {
                if ($this->$recruits[$key] instanceof IFighter)
                    $value->fight();
            }
        }
    }
?>