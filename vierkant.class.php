<?php
    class Vierkant extends Figuur{
        public $oppervlakteVierkant;
        protected $x;

    public function __construct($X) {
            $this->x =  $X;
            $this->oppervlakteVierkant = $X * $X;
    }
};
?>