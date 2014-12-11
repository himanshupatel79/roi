<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package ROI
 * @version 1.0
 *
 * Roi Class is have all method contains all business logic.
 *
 */
class Roi
{

    /**
     * @param $noe Number of Employee
     * @param $rup Reduce under performance
     * @return string
     */
    public function getSavingofReduceUnderPerformance($noe, $rup)
    {
        return number_format($noe * 0.1 * $rup, 2, '.', '');
    }

    /**
     * @param $noe Number of Employee
     * @param $empattriper
     * @return string
     */
    public function getSavingofReduceAttritionCosts($noe, $empattriper)
    {
        return number_format($noe * 25000 * ($empattriper / 100), 2, '.', '');
    }

    /**
     * @param $noe Number of Employee
     * @param $feeearnempper
     * @return string
     */
    public function getSavingofFewerWastedChargeableHours($noe, $feeearnempper)
    {
        return number_format($feeearnempper * 2 * 150, 2, '.', '');
    }

    /**
     * @param $noe Number of Employee
     * @param $hrs
     * @return string
     */

    public function getSavingofFewerWastedAdministrationHours($noe, $hrs)
    {
        $hrdToEmpRatio = ($hrs / $noe);
        if ($hrdToEmpRatio >= 0.002) {
            $cost = $hrs * 7800;
        } else {
            $overEmployee = round($noe % 500, 0);
            $cost = (15.6 * $overEmployee) + 7800;
        }
        return number_format($cost, 2, '.', '');
    }
}
