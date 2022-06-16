<?php
    class NightsWatch {

        private $_recruits = array();

        public function recruit($someone) {
            $this->$_recruits[] = $someone;
        }

        public function fight() {
            foreach ($this->$_recruits as $key => $value)
            {
                if ($this->$_recruits[$key] instanceof IFighter)
                    $value->fight();
            }
        }
    }
?>