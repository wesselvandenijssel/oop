<?php
include 'vierkant.class.php';
include 'cilinder.class.php';
class Figuur{

}
    class Driehoek extends Figuur{
        public $oppervlakteDriehoek;
        protected $H;
        protected $B;

    public function __construct( $H, $B) {
        $this->h =  $H;
        $this->b =  $B;

            $this->oppervlakteDriehoek = $H * $B / 2;
    }
};
?>