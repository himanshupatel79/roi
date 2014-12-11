<?php
/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package ROI
 * @version 1.0
 *
 * process.php is a process ajax request and routing to access business logic.
 *
 */
include_once("autoloader.php");
// get data source object
$objRoi = new Roi();

$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`

/* Validate the form on the server side */
if (empty($_POST['noe'])) { //Number of employee cannot be empty
    $errors['noe'] = 'Number of employee cannot be blank';
}

if (!empty($errors)) { //If errors in validation
    $form_data['success'] = false;
    $form_data['errors'] = $errors;
} else { //If not, process the form, and return true on success
    $form_data['success'] = true;
    $form_data['posted'] = 'Data Was Posted Successfully';
    $form_data['rup'] = $objRoi->getSavingofReduceUnderPerformance($_POST['noe'], $_POST['rup']);
    $form_data['rac'] = $objRoi->getSavingofReduceAttritionCosts($_POST['noe'], $_POST['empattriper']);
    $form_data['fee'] = $objRoi->getSavingofFewerWastedChargeableHours($_POST['noe'], $_POST['feeearnempper']);
    $form_data['hrs'] = $objRoi->getSavingofFewerWastedAdministrationHours($_POST['noe'], $_POST['hrs']);
}

//Return the data back to index.php
echo json_encode($form_data);