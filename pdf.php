<?php 

// require_once './config/dompdf/autoload.inc.php';
require(realpath($_SERVER["DOCUMENT_ROOT"]).'/CINEFWEB/config/dompdf/autoload.inc.php');


use Dompdf\Dompdf;
// use Dompdf\Options;

class Pdf extends Dompdf {
    public function __construct()
    {
        parent::__construct();   
    }
}
