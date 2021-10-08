<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$app = $_POST["app"];
	$dob = $_POST["dob"];
	$gender = $_POST["gender"];
	$place = $_POST["place"];
	$paddress = $_POST["paddress"];
	$saddress = $_POST["saddress"];
	$saddress2 = $_POST["saddress2"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$mobileno1 = $_POST["mobileno1"];	  
	$email = $_POST["email"];
	$SSLCBoard = $_POST["SSLCboard"];
	$SSLCPercentage = $_POST["SSLCpercentage"];
	$SSLCYOP = $_POST["SSLCyop"];
	$HSCBoard = $_POST["HSCboard"];
	$HSCPercentage = $_POST["HSCpercentage"];
	$HSCYOP = $_POST["HSCyop"];
	$UGBoard = $_POST["UGboard"];
	$UGPercentage = $_POST["UGpercentage"];
	$UGYOP = $_POST["UGyop"];
	$PGBoard = $_POST["PGboard"];
	$PGPercentage = $_POST["PGpercentage"];
	$PGYOP = $_POST["PGyop"];
	$category = $_POST["category"];
	$position = $_POST["position"];
	$period = $_POST["period"];
	$leavingreason = $_POST["leavingreason"];
	$companythrough = $_POST["companythrough"];
	$referalName = $_POST["name1"];
	$referalLastName = $_POST["lastname1"];
	$companyName = $_POST["companyName"];
	$designation = $_POST["designation"];
	$contactno1 = $_POST["contactno1"];
	$relationshipStatus = $_POST["relationship"];
	$emergencyContactName = $_POST["econtactno1"];
	$aadhar = $_POST["aadhar"];
	$pan = $_POST["pan"];
	$bankName = $_POST["bank"];
	$ifsc = $_POST["ifsc"];
	$account = $_POST["account"];	
	if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    // $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));

    
    //only allow jpeg, jpg and png file type
    $extensions = array("jpeg", "jpg", "png" ,"pdf", "doc", "docx", "xls", "xlsx", "csv", "txt", "rtf", "html", "zip", "mp3", "wma", "mpg", "flv", "avi", "jpg", "jpeg", "png", "gif");

    // if (in_array($file_ext, $extensions) === false) {
    //     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    // }
    //File size must be excately 2 MB
    if ($file_size > 2097152) {
        $errors[] = 'File size must be excately 2 MB';
    } 
   

    //images are the destination library -> create in your project
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/" . $file_name);
        // echo "Success";
    } else {
        print_r($errors);
    }
}


	$mail->SMTPDebug=0;

	try{
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = "true";
		$mail->Username = 'nivamathi97@gmail.com';
		$mail->Password = 'Niva!2997';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = '587';

		$mail->setFrom('nivamathi97@gmail.com');
		$mail->addAddress('nivamathi97@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Message Received (Contact Page)';
		$mail->Body = "<h3>FirstName : $name <br>LastName: $lastname <br>PostApplied : $app<br>Date Of Birth : $dob <br>Gender: $gender <br>Place : $place<br>Present Address : $paddress <br>Street Address: $saddress <br>Street Address 2 : $saddress2<br>State : $state <br>City: $city <br>MobileNo : $mobileno1<br>Email : $email <br>SSLCBoard: $SSLCBoard <br>SSLCPercentage : $SSLCPercentage<br>SSLCYOP : $SSLCYOP <br>HSCBoard: $HSCBoard <br>HSCPercentage : $HSCPercentage<br>HSCYOP : $HSCYOP <br>UGBoard: $UGBoard <br>UGPercentage : $UGPercentage<br>UGYOP : $UGYOP <br>PGBoard: $PGBoard <br>PGPercentage : $PGPercentage<br>	PGYOP : $PGYOP <br>Company Category : $category <br>Position: $position <br>Working Period : $period<br>	Reaon For Leaving : $leavingreason <br>How do you come to Know about this company?: $companythrough <br>ReferalName : $referalName<br>ReferalLastName : $referalLastName <br>CompanyName: $companyName <br>Designation : $designation<br>ContactNumber : $contactno1 <br>RelationshipStatus: $relationshipStatus <br>EmergencyContactNumber : $emergencyContactName<br>AadharNumber : $aadhar<br>PanNumber : $pan <br>BankName: $bankName <br>IFSC Code : $ifsc<br>AccountNumber: $account <br>CV :$file_name<br></h3>";

		$mail->send();
		$alert = '<div class="alert-success">
					<span>Message Sent! Thank you contacting us.</span>
					</div>';
	}catch(Exception $e){
		$alert = '<div class="alert-error">
					<span>'.$e ->getMessage().'</span>
					</div>';
	}
}

?>