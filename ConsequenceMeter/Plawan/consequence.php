<?php
session_start();
$email = $_SESSION['Email'];
$name = $_SESSION['Name'];
$income = $_SESSION['Income'];
$recIncome = $_SESSION['RecExpense'];
include "consequenceMeter.html";
if (isset($_POST['savings']) && !empty($_POST['savings']) && isset($_POST['miscExpenditure']) && !empty($_POST['miscExpenditure']) && (isset($_POST['itemToBuy'])) && !empty($_POST['itemToBuy']))
{
	$savings = $_POST['savings'];
	$miscExp = $_POST['miscExpenditure'];
	$item = $_POST['itemToBuy'];
	$total_expense_expected = $miscExp + $recIncome;
	$apppx_monthly_save = $income - $total_expense_expected;
	$total_save_approx = $savings + $apppx_monthly_save;
	$monthly_percent_save = ($apppx_monthly_save / $income) * 100;
	if (isset($_POST['paymentMode']) && strcmp($_POST['paymentMode'],"savMode") == 0){
			$new_savings = $savings - $item;
			$new_approx_save = $new_savings + $apppx_monthly_save;
			$drain = (($total_save_approx - $new_approx_save) / $total_save_approx) * 100;
		}
	elseif (isset($_POST['paymentMode']) && strcmp($_POST['paymentMode'],"emiMode") == 0){
			$emi = $_POST['emi'];
			$income1 = $income - $emi;
			$new_save1 = ($monthly_percent_save / 100) * $income1;
			$new_save_emi = $new_save1 + $savings;
			$drain = (($total_save_approx - $new_save_emi) / $total_save_approx) * 100;
		}	
	else {
			$emi = $_POST['emi'];
			$dp = $_POST['downPayment'];
			$new_save_left = $savings - $dp;
			$income2 = $income - $emi;
			$new_save2 = ($monthly_percent_save / 100) * $income2;
			$new_save_buy = $new_save_left + $new_save2;
			$drain = (($total_save_approx - $new_save_buy) / $total_save_approx) * 100;
		}
		if ($drain == 0)
		{
			$cm = 10;
			}
		if ($drain > 0 && $drain <= 10)
		{
			$cm = 9;
			}
		if ($drain > 10 && $drain <= 20)
		{
			$cm = 8;
			}
		if ($drain > 20 && $drain <= 30)
		{
			$cm = 7;
			}
		if ($drain > 30 && $drain <= 40)
		{
			$cm = 6;
			}
		if ($drain > 40 && $drain <= 50)
		{
			$cm = 5;
			}
		if ($drain > 50 && $drain <= 60)
		{
			$cm = 4;
			}
		if ($drain > 60 && $drain <= 70)
		{
			$cm = 3;
			}
		if ($drain > 70 && $drain <= 80)
		{
			$cm = 2;
			}
		if ($drain > 80 && $drain <= 90)
		{
			$cm = 1;
			}
		if ($drain > 90 && $drain <= 100)
		{
			$cm = 0;
			}
		unset($drain);
	}
?>
<meter id="meter" value="<?php echo $cm ?>" max="10" min="0" low="5" optimum="6" style="width:50%"> FinPact Meter</meter>
<p><h3><?php echo $cm ?>/10</h3></p>