<?php

class logic {

    public $_denominations_array = array(1000, 500, 100, 50, 20, 10);
    public $_count = array(0, 0, 0, 0, 0, 0);

    public function calculateAmount($amount = 0) {
        $result = array();

        if ($amount % 10 == 0 && !$this->_getdec($amount)) {
            $i = 0;
            $new_amt = $amount;
            while ($new_amt > 0) {
                if ($new_amt >= $this->_denominations_array[$i]) {
                    $ans = floor($new_amt / $this->_denominations_array[$i]);
                    $this->_count[$i] = $ans;
                    $new_amt = $new_amt - ($ans * $this->_denominations_array[$i]);
                }
                $i++;
            }
            $result = $this->_count;
        }
        return $result;
    }

    public function _getdec($f) {
        $num = 0;
        while (true) {
            if ((string) $f === (string) round($f)) {
                break;
            }
            if (is_infinite($f)) {
                break;
            }

            $f *= 10;
            $num++;
        }
        return $num;
    }

}

?>
