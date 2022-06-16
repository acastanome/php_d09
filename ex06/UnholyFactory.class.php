<?php
    class UnholyFactory {

        private $recruits = array();

        public function absorb($someone)
        {
            if (array_key_exists($someone->name, $this->recruits))
            {
                echo "(Factory already absorbed a fighter of type $someone->name)" . PHP_EOL;
            }
            else
            {
                if ($someone instanceof Fighter)
                {
                    echo "(Factory absorbed a fighter of type $someone->name)" . PHP_EOL;
                    $this->recruits[$someone->name] = $someone;
                }
                else
                    echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
            }
        }

        public function fabricate($someone)
        {
                if (array_key_exists($someone, $this->recruits))
                {
                    echo "(Factory fabricates a fighter of type $someone)" . PHP_EOL;
                    return clone $this->recruits[$someone];
                }
                else
                {
                    echo "(Factory hasn't absorbed any fighter of type $someone)" . PHP_EOL;
                    return NULL;
                }
        }

    }
?>