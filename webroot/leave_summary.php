<?php
$tbl = isset($_REQUEST['select']) ? $_REQUEST['select'] : '';
$recid = isset($_REQUEST['leaveid']) ? $_REQUEST['leaveid']+0 : 0;
if ( $tbl=='' || $recid==0 ) exit;

include "./defines.php";
$link = phplm_db_connect();

// Generate Leave Letter PDF

define('PDF_HEADER_LOGO', '../images/leave.png');
define('PDF_HEADER_TITLE', 'PHP Leave Manager');
define('PDF_HEADER_STRING', "Leave Summary\nLeaveID: $recid");
define('PDF_HEADER_LOGO_WIDTH', 12);
define('PDF_LANG_FILE', dirname(__FILE__).'/lang/eng.php');

// Include the main TCPDF library here after override defines above.
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ap.Muthu');
$pdf->SetTitle('Leave PDF Example');
$pdf->SetSubject('Leave Test PDF');
$pdf->SetKeywords('leave, TCPDF, PDF, example, test, guide');
$pdf->SetHeaderData(PDF_HEADER_LOGO
				  , PDF_HEADER_LOGO_WIDTH
				  , PDF_HEADER_TITLE
				  , PDF_HEADER_STRING
				  , Array(0,64,255)
				  , Array(0,64,128));
$pdf->setFooterData(Array(0,64,0)
				  , Array(0,64,128));
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
if (@file_exists(PDF_LANG_FILE)) {
	require_once(PDF_LANG_FILE);
	$pdf->setLanguageArray($l);
}
// ---------------------------------------------------------
$pdf->setFontSubsetting(true);
$pdf->SetFont('dejavusans', '', 14, '', true);
$pdf->AddPage();
$pdf->setTextShadow(Array('enabled'=>true
						, 'depth_w'=>0.2
						, 'depth_h'=>0.2
						, 'color'=>Array(196,196,196)
						, 'opacity'=>1
						, 'blend_mode'=>'Normal')
					);

$html = '';

$sql = "SELECT YEAR(LeaveFrom) AS `Year`, IsVerified, IsApproved, LeaveDays, 
LeaveType, LeaveFrom, LeaveTill, EmployeeID, Employee, Designation, Reason 
FROM `leaves` LEFT JOIN `employees` USING (EmployeeID)
WHERE LeaveID=$recid";

$result = mysqli_query($link, $sql);
$leavelist = mysqli_fetch_assoc($result);

$Year        = $leavelist['Year'];
$EmployeeID  = $leavelist['EmployeeID'];
$Employee    = $leavelist['Employee'];
$Designation = $leavelist['Designation'];
$LeaveType   = $leavelist['LeaveType'];
$LeaveDays   = $leavelist['LeaveDays'];
$LeaveFrom   = $leavelist['LeaveFrom'];
$LeaveTill   = $leavelist['LeaveTill'];
$LeaveReason = $leavelist['Reason'];
$Verified    = $leavelist['IsVerified'];
$Approved    = $leavelist['IsApproved'];

$LeaveStatus = Array();
if($Verified) $LeaveStatus[] = 'Verified';
if($Approved) $LeaveStatus[] = '<b>Approved</b>';
if (count($LeaveStatus) == 0) $LeaveStatus = 'Processing';
else $LeaveStatus = implode(', ', $LeaveStatus);

$html .= "
<table>
<tr><th>Year: </th><td><b>$Year</b></td></tr>
<tr><th>EmployeeID: </th><td><b>$EmployeeID</b></td></tr>
<tr><th>Employee: </th><td><b>$Employee</b></td></tr>
<tr><th>Designation: </th><td><b>$Designation</b></td></tr>
<tr><th>Availed Days: </th><td><b>$LeaveType: $LeaveDays</b></td></tr>
<tr><th>Leave Duration: </th><td>From <b>$LeaveFrom</b> to <b>$LeaveTill</b></td></tr>
<tr><th>Leave Reason: </th><td>$LeaveReason</td></tr>
<tr><th>Leave Status: </th><td>$LeaveStatus</td></tr>
</table>
<br><br>";

$sql = "SELECT LeaveType, SUM(LeaveDays) AS AvailedLeave 
FROM `leaves`
WHERE YEAR(LeaveFrom)=$Year AND LeaveFrom <= '$LeaveFrom' 
AND IsVerified AND IsApproved AND EmployeeID=$EmployeeID
GROUP BY LeaveType";

$result = mysqli_query($link, $sql);

$Availeds = false;
$Leave =  Array();
if ($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$Availeds = true;
		$Leave[$row[LeaveType]] = $row[AvailedLeave];
	}
}

$sql = "SELECT * FROM balances WHERE EmployeeID=$EmployeeID AND `Year`=$Year";

$result = mysqli_query($link, $sql);
$balances= mysqli_fetch_assoc($result);
$AvailedCL = (isset($Leave['CL']) ? $Leave['CL'] : 0);
$AvailedEL = (isset($Leave['EL']) ? $Leave['EL'] : 0);
$AvailedRH = (isset($Leave['RH']) ? $Leave['RH'] : 0);
$AvailedML = (isset($Leave['ML']) ? $Leave['ML'] : 0);
$BalCL = $balances['BalCL'] - $AvailedCL;
$BalEL = $balances['BalEL'] - $AvailedEL;
$BalRH = $balances['BalRH'] - $AvailedRH;
$BalML = $balances['BalML'] - $AvailedML;

if ($Availeds) {
	$html .= "<u>Days Balance / Availed Till date:</u><br>";
} else {
	$html .= "<u>Days Balance Till date:</u><br>";
}

$html .= "
<table>
    <tr>
        <th><u><b>Summary</b></u></th>
        <th><u><b>CL</b></u></th>
        <th><u><b>EL</b></u></th>
        <th><u><b>RH</b></u></th>
        <th><u><b>ML</b></u></th>
    </tr>
";
if ($Availeds) {
$html .= "
    <tr>
        <th><b>Availed</b></th>
        <td>$AvailedCL</td>
        <td>$AvailedEL</td>
        <td>$AvailedRH</td>
        <td>$AvailedML</td>
    </tr>
";
}
$html .= "
    <tr>
        <th><b>Balance</b></th>
        <td>$BalCL</td>
        <td>$BalEL</td>
        <td>$BalRH</td>
        <td>$BalML</td>
    </tr>
</table>
<br><br>";

$html .= "
<u>Legend:</u><br>
<b>CL</b>: Casual Leave<br>
<b>EL</b>: Earned Leave<br>
<b>RH</b>: Restricted Holiday<br>
<b>ML</b>: Medical Leave<br>
<br>";

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$outfile = PHPLM_PDFPFX . 'LeaveID_'.$recid.'_'.$Year.'.pdf';
$pdf->Output($outfile, 'I');







?>
