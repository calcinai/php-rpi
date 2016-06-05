<?php

/**
 * @package    calcinai/phpi
 * @author     Michael Calcinai <michael@calcin.ai>
 */

namespace  Calcinai\PHPi\Board\V3;

use Calcinai\PHPi\Board\AbstractBoard;
use Calcinai\PHPi\Board\Feature;

class B extends AbstractBoard {

    use Feature\SoC\BCM2837;
    use Feature\HDMI;
    use Feature\Ethernet;
}