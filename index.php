<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en-US" class="supernova">
<head>
  <title>Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<div class="banner-logo">
      <img class="banner-img" src="nano-logo-white.png" height="80" width="300" style="margin-top: 20px;margin-bottom: 20px;">
    </div>


<div class="container">
<form method="post" action="index.php" class="form" enctype="multipart/form-data">
<div class="card">
<h2 style="text-align :center;margin-bottom:80px;margin-right:40px;font-weight: 600;"> Candidate Interview Form</h2>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-5">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">First Name<span> *</span></label>
<input type = "text" class = "form-control" id = "name" name = "name" placeholder="Please enter your name" tabindex="1" required>
</div>
<div class="col-md-5">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Last Name</label>
<input type = "text" class = "form-control" id = "lastname" name = "lastname"  tabindex="2">
</div>
</div>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Post Applied<span> *</span></label>
<input type = "text" class = "form-control" id = "app" name = "app" tabindex="3" required>
</div>
</div>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Date Of Birth<span> *</span></label>
<input type = "date" class = "form-control" id = "dob" name = "dob" tabindex="4" required>
</div>
</div>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
         <label class="col-md label-control form-label" for="userinput1" style="margin-bottom:10px;">Sex</label>
         <div class="col-md-12">
           <label class="display-inline-block custom-control custom-radio mt-1">
             <input type="radio" name="gender" value="male" checked class="custom-control-input gender" >
             <span class="custom-control-indicator" ></span>
             <span class="custom-control-description ml-0 form-label">Male &nbsp;</span>
           </label>
           <label class="display-inline-block custom-control custom-radio">
             <input type="radio" name="gender" value="female"  class="custom-control-input gender">
             <span class="custom-control-indicator"></span>
             <span class="custom-control-description ml-0 form-label">Female</span>
           </label>
         </div>
     </div>
   </div>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label">Place<span> *</span></label>
<input type = "text" class = "form-control" id = "place" name = "place" required>
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label">Present Address<span> *</span></label>
<input type = "text" class = "form-control" id = "paddress" name = "paddress" required>
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label">Street Address<span> *</span></label>
<input type = "text" class = "form-control" id = "saddress" name = "saddress" required>
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label">Street Address Line 2</label>
<input type = "text" class = "form-control" id = "saddress2" name = "saddress2">
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-5">
<label for = "userinput1" class="form-label">State / Province</label>
<input type = "text" class = "form-control" id = "state" name = "state">
</div>
<div class="col-md-5">
<label for = "userinput1" class="form-label">City</label>
<input type = "text" class = "form-control" id = "city" name = "city">
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
          <label for="userinput1" class="form-label">Phone Number<span> *</span></label>        
            <input type="number" id="mobileno1" class="form-control" name="mobileno1" placeholder="Enter Mobile Number" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;">            
            <div id="result-mobilenoS" class="hidden">
              <span>
                Mobile Number is to be 10 digits only!!!
              </span>
          </div>          
        </div>
    </div>    
   <div class="row" style="margin-bottom: 20px;">
    <div class="col-md-10">
         <label class="col-md label-control form-label" for="userinput1" style="margin-bottom:10px;">E-Mail<span> *</span></label>          
          <input type="text" id="email" class="form-control" name="email" placeholder="Enter E-Mail" required>
          <label class="hidden" id="rpAlrt" > This Email Id Already Exist!!</label>          
       </div>
   </div>
      <div class = "row" style="margin-bottom: 30px;">
      <div class = "col-md-10">
      <label class="col-md-label-control form-label" id="label_11" for="input_11" style="margin-bottom:10px;">Qualification<span class="form-required"> *</span>
        </label>
       <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
         <table summary="" aria-labelledby="label_11" class="form-matrix-table" data-component="matrix">
           <tr class="form-matrix-tr form-matrix-header-tr">
             <th class="form-matrix-th" style="border:none">
               
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0">
               <label id="label_11_col_0"> Board/University </label>
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1">
               <label id="label_11_col_1"> Percentage </label>
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_2">
               <label id="label_11_col_2"> YOP </label>
             </th>
           </tr>
           <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_11 label_11_row_0">
             <th scope="row" class="form-matrix-headers form-matrix-row-headers">
               <label id="label_11_row_0"> SSLC </label>
             </th>
             <td class="form-matrix-values">
               <input type="text" id="input_11_0_0" class="form-textbox validate[required, requireOneAnswer]" size="5" name="SSLCboard" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_0 label_11_row_0" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_0_1" class="form-textbox validate[required, requireOneAnswer]" size="5" name="SSLCpercentage" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_1 label_11_row_0" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_0_2" class="form-textbox validate[required, requireOneAnswer]" size="5" name="SSLCyop" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_2 label_11_row_0" />
             </td>
           </tr>
           <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_11 label_11_row_1">
             <th scope="row" class="form-matrix-headers form-matrix-row-headers">
               <label id="label_11_row_1"> HSC </label>
             </th>
             <td class="form-matrix-values">
               <input type="text" id="input_11_1_0" class="form-textbox validate[required, requireOneAnswer]" size="5" name="HSCboard" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_0 label_11_row_1" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_1_1" class="form-textbox validate[required, requireOneAnswer]" size="5" name="HSCpercentage" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_1 label_11_row_1" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_1_2" class="form-textbox validate[required, requireOneAnswer]" size="5" name="HSCyop" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_2 label_11_row_1" />
             </td>
           </tr>
           <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_11 label_11_row_2">
             <th scope="row" class="form-matrix-headers form-matrix-row-headers">
               <label id="label_11_row_2"> UG </label>
             </th>
             <td class="form-matrix-values">
               <input type="text" id="input_11_2_0" class="form-textbox validate[required, requireOneAnswer]" size="5" name="UGboard" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_0 label_11_row_2" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_2_1" class="form-textbox validate[required, requireOneAnswer]" size="5" name="UGpercentage" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_1 label_11_row_2" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_2_2" class="form-textbox validate[required, requireOneAnswer]" size="5" name="UGyop" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_2 label_11_row_2" />
             </td>
           </tr>
           <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_11 label_11_row_3">
             <th scope="row" class="form-matrix-headers form-matrix-row-headers">
               <label id="label_11_row_3"> PG </label>
             </th>
             <td class="form-matrix-values">
               <input type="text" id="input_11_3_0" class="form-textbox validate[required, requireOneAnswer]" size="5" name="PGboard" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_0 label_11_row_3" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_3_1" class="form-textbox validate[required, requireOneAnswer]" size="5" name="PGpercentage" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_1 label_11_row_3" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_11_3_2" class="form-textbox validate[required, requireOneAnswer]" size="5" name="PGyop" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_11_col_2 label_11_row_3" />
             </td>
           </tr>
         </table>
     </div>
    </div>
  </div>
  <div class="row" style="margin-bottom: 30px">
  <div class="col-md-10 txt">
  <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12" style="margin-bottom:10px;">Experience/Fresher<span class="form-required"> *</span></label>
       <div id="cid_12" class="form-input-wide jf-required" data-layout="full">
         <table summary="" aria-labelledby="label_12" class="form-matrix-table" data-component="matrix">
           <tr class="form-matrix-tr form-matrix-header-tr">
             <th class="form-matrix-th" style="border:none">
               
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_0">
               <label id="label_12_col_0"> Category </label>
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_1">
               <label id="label_12_col_1"> Position </label>
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_2">
               <label id="label_12_col_2"> Working Period </label>
             </th>
             <th scope="col" class="form-matrix-headers form-matrix-column-headers form-matrix-column_3">
               <label id="label_12_col_3"> Reason of leaving </label>
             </th>
           </tr>
           <tr class="form-matrix-tr form-matrix-value-tr" aria-labelledby="label_12 label_12_row_0">
             <th scope="row" class="form-matrix-headers form-matrix-row-headers">
               <label id="label_12_row_0"> Company Name </label>
             </th>
             <td class="form-matrix-values">
               <input type="text" id="input_12_0_0" class="form-textbox validate[required, requireEveryRow]" size="5" name="category" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_12_col_0 label_12_row_0" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_12_0_1" class="form-textbox validate[required, requireEveryRow]" size="5" name="position" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_12_col_1 label_12_row_0" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_12_0_2" class="form-textbox validate[required, requireEveryRow]" size="5" name="period" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_12_col_2 label_12_row_0" />
             </td>
             <td class="form-matrix-values">
               <input type="text" id="input_12_0_3" class="form-textbox validate[required, requireEveryRow]" size="5" name="leavingreason" style="width:100%;box-sizing:border-box" value="" aria-labelledby="label_12_col_3 label_12_row_0" />
             </td>
           </tr>
         </table>
       </div>
  </div>
  </div>
      <div class="row" style="margin-bottom: 40px;">
    <div class="col-md-10">
         <label class="col-md label-control form-label" for="userinput1" style="margin-bottom:10px;">How do you come to know about this company<span> *</span></label>
         <div class="dropdown">            
         <select class="custom-select form-control" id ="companythrough" name="companythrough" required>
           <option value = "">Select</option>                
           <option value = "Linked In">Linked In</option>                  
           <option value = "Social Media">Social Media</option>                  
           <option value = "Company Website">Company Website</option>                  
           <option value = "Family/Friend">Family/Friend</option>
         </select>
     </div>      
   </div>
   </div>
   <h2 style="font-weight:600;">Reference</h2>
   <div class = "row" style="margin-bottom: 20px;margin-top: 40px;">
<div class="col-md-5">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">First Name<span>*</span></label>
<input type = "text" class = "form-control" id = "name1" name = "name1" placeholder="Please enter your name" required>
</div>
<div class="col-md-5">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Last Name</label>
<input type = "text" class = "form-control" id = "lastname1" name = "lastname1">
</div>
</div>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Company Name<span>*</span></label>
<input type = "text" class = "form-control" id = "companyName" name = "companyName" required>
</div>
</div>
<div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Designation<span>*</span></label>
<input type = "text" class = "form-control" id = "designation" name = "designation" required>
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
          <label for="userinput1" class = "form-label" style="margin-bottom:10px;">Contact Number<span> *</span></label>        
            <input type="number" id="contactno1" class="form-control" name="contactno1" placeholder="Enter Mobile Number" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;">            
            <div id="result-contactno1" class="hidden">
              <span>
               Mobile Number is to be 10 digits only!!!
              </span>
            </div>          
        </div>
   </div>
   <div class = "row" style="margin-bottom: 20px;">
<div class="col-md-10">
<label for = "userinput1" class="form-label" style="margin-bottom:10px;">Relationship Status<span>*</span></label>
<input type = "text" class = "form-control" id = "relationship" name = "relationship" required>
</div>
</div>
<div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
         <label for="userinput1" class="form-label">Emergency Contact Number<span> *</span></label>        
           <input type="number" id="econtactno1" class="form-control" name="econtactno1" placeholder="Enter Mobile Number" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8) return false;">            
           <div id="result-econtactno1" class="hidden">
             <span>
               Mobile Number is to be 10 digits only!!!
             </span>
           </div>          
       </div>
   </div>
   <div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
         <label for="userinput1" class = "form-label" style="margin-bottom:10px;">Aadhar Number<span> *</span></label>        
           <input type="number" id="aadhar" class="form-control" name="aadhar" placeholder="Enter Aadhar Number" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==12 && event.keyCode!=8) return false;">            
           <div id="result-aadhar" class="hidden">
             <span>
               Aadhar Number is to be 12 digits only!!!
             </span>
           </div>          
       </div>
   </div>
   <div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
         <label for="userinput1" class="form-label" style="margin-bottom:10px;">Pan Number<span> *</span></label>        
           <input type="text" id="pan" class="form-control" name="pan" placeholder="Enter Pan Number" required>
                   
       </div>
   </div>
   <div class="row" style="margin-bottom: 40px;">
    <div class="col-md-10">
         <label class="col-md label-control form-label" for="userinput1" style="margin-bottom:10px;">Bank Name<span> *</span></label>              
         <select class="select2 form-control" id ="bank" name="bank">
           <option value=""> Please Select </option>
           <option value="Allahabad Bank"> Allahabad Bank </option>
           <option value="Andhra Bank"> Andhra Bank </option>
           <option value="Axis Bank"> Axis Bank </option>
           <option value="Bank of Bahrain and Kuwait"> Bank of Bahrain and Kuwait </option>
           <option value="Bank of Baroda - Corporate Banking"> Bank of Baroda - Corporate Banking </option>
           <option value="Bank of Baroda - Retail Banking"> Bank of Baroda - Retail Banking </option>
           <option value="Bank of India"> Bank of India </option>
           <option value="Bank of Maharashtra"> Bank of Maharashtra </option>
           <option value="Canara Bank"> Canara Bank </option>
           <option value="Central Bank of India"> Central Bank of India </option>
           <option value="City Union Bank"> City Union Bank </option>
           <option value="Corporation Bank"> Corporation Bank </option>
           <option value="Deutsche Bank"> Deutsche Bank </option>
           <option value="Development Credit Bank"> Development Credit Bank </option>
           <option value="Dhanlaxmi Bank"> Dhanlaxmi Bank </option>
           <option value="Federal Bank"> Federal Bank </option>
           <option value="ICICI Bank"> ICICI Bank </option>
           <option value="IDBI Bank"> IDBI Bank </option>
           <option value="Indian Bank"> Indian Bank </option>
           <option value="Indian Overseas Bank"> Indian Overseas Bank </option>
           <option value="IndusInd Bank"> IndusInd Bank </option>
           <option value="ING Vysya Bank"> ING Vysya Bank </option>
           <option value="Jammu and Kashmir Bank"> Jammu and Kashmir Bank </option>
           <option value="Karnataka Bank Ltd"> Karnataka Bank Ltd </option>
           <option value="Karur Vysya Bank"> Karur Vysya Bank </option>
           <option value="Kotak Bank"> Kotak Bank </option>
           <option value="Laxmi Vilas Bank"> Laxmi Vilas Bank </option>
           <option value="Oriental Bank of Commerce"> Oriental Bank of Commerce </option>
           <option value="Punjab National Bank - Corporate Banking"> Punjab National Bank - Corporate Banking </option>
           <option value="Punjab National Bank - Retail Banking"> Punjab National Bank - Retail Banking </option>
           <option value="Punjab &amp; Sind Bank"> Punjab &amp; Sind Bank </option>
           <option value="Shamrao Vitthal Co-operative Bank"> Shamrao Vitthal Co-operative Bank </option>
           <option value="South Indian Bank"> South Indian Bank </option>
           <option value="State Bank of Bikaner &amp; Jaipur"> State Bank of Bikaner &amp; Jaipur </option>
           <option value="State Bank of Hyderabad"> State Bank of Hyderabad </option>
           <option value="State Bank of India"> State Bank of India </option>
           <option value="State Bank of Mysore"> State Bank of Mysore </option>
           <option value="State Bank of Patiala"> State Bank of Patiala </option>
           <option value="State Bank of Travancore"> State Bank of Travancore </option>
           <option value="Syndicate Bank"> Syndicate Bank </option>
           <option value="Tamilnad Mercantile Bank Ltd."> Tamilnad Mercantile Bank Ltd. </option>
           <option value="UCO Bank"> UCO Bank </option>
           <option value="Union Bank of India"> Union Bank of India </option>
           <option value="United Bank of India"> United Bank of India </option>
           <option value="Vijaya Bank"> Vijaya Bank </option>
           <option value="Yes Bank Ltd"> Yes Bank Ltd </option>
     </select>      
   </div>
   </div>
   <div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
         <label for="userinput1" class = "form-label" style="margin-bottom:10px;">IFSC Code<span> *</span></label>        
           <input type="number" id="ifsc" class="form-control" name="ifsc" placeholder="Enter IFSC Code" required>            
                   
       </div>
   </div>
   <div class="row" style="margin-bottom: 20px;">
<div class="col-md-10">
         <label for="userinput1" class = "form-label" style="margin-bottom:10px;">Bank Account Number<span> *</span></label>        
           <input type="number" id="account" class="form-control" name="account" placeholder="Enter Bank Account Number" required>                      
       </div>
   </div>
   <div class="row" style="margin-bottom: 50px;">
<div class="col-md-10">
        <label for="userinput1" class = "form-label" style="margin-bottom:10px;">CV<span> *</span></label>        
            <div class="jfUpload-button-container">
                <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">
                  Browse Files
                  <div class="jfUpload-heading forDesktop">
                    Drag and drop files here
                  </div>
                  <div class="jfUpload-heading forMobile">
                     Choose a file
                  </div>
                </div>
              </div>
           </div>
           <div class="col-md-10">
           <div class="jfUpload-files-container">
             <input type="file" id="input_24" name="file" multiple="" class="form-upload-multiple" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-limit-file-size="Yes" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" aria-label="Browse Files" /required>
           </div>
       </div>
   </div>

<div class="row">
<div class="col-md-6" style="margin-bottom:20px;">
<input type="submit"  class="btn btn-success" id = "submit" name = "submit" datatoggle = "tooltip" title= "save" value="Submit" style="height:100%;text-align: center;width:auto;max-width:180px;">
</div>
</div>
</div>
</form>
</div>

<script type = "text/javascript">
if(window.history.replaceState){
window.history.replaceState(null,null,window.location.href);
}

$("#mobileno1").keyup(function(){  
    var num = $(this).val();
    var len = num.length;
    //alert(num);
    if(len == 10)
    {  
      $.ajax({
        type : 'POST',
        url  : '',
        data : $(this).serialize(),
        success : function(data)
        {
            value = data;
            if(value > 0)
            {
                $("#result-mobileno").removeClass("hidden");
                $("#result-mobilenoS").addClass("hidden");
                $("#submit").addClass("hidden");
            }
            else
            {
                $("#result-mobileno").addClass("hidden");
                $("#result-mobilenoS").addClass("hidden");
                $("#submit").removeClass("hidden");
            }
        }
      });return false;
    }
    else
    {
      $("#submit").addClass("hidden");
      $("#result-mobileno").addClass("hidden");
      $("#result-mobilenoS").removeClass("hidden");
    }
  });
 $("#contactno1").keyup(function(){  
    var num = $(this).val();
    var len = num.length;
    //alert(num);
    if(len == 10)
    {  
      $.ajax({
        type : 'POST',
        url  : '',
        data : $(this).serialize(),
        success : function(data)
        {
            value = data;
            if(value > 0)
            {
                $("#result-contactno1").removeClass("hidden");
                $("#result-contactno1").addClass("hidden");
                $("#submit").addClass("hidden");
            }
            else
            {
                $("#result-contactno1").addClass("hidden");
                $("#result-contactno1").addClass("hidden");
                $("#submit").removeClass("hidden");
            }
        }
      });return false;
    }
    else
    {
      $("#submit").addClass("hidden");
      $("#result-contactno1").addClass("hidden");
      $("#result-contactno1").removeClass("hidden");
    }
  });
   $("#econtactno1").keyup(function(){  
    var num = $(this).val();
    var len = num.length;
    //alert(num);
    if(len == 10)
    {  
      $.ajax({
        type : 'POST',
        url  : '',
        data : $(this).serialize(),
        success : function(data)
        {
            value = data;
            if(value > 0)
            {
                $("#result-econtactno1").removeClass("hidden");
                $("#result-econtactno1").addClass("hidden");
                $("#submit").addClass("hidden");
            }
            else
            {
                $("#result-econtactno1").addClass("hidden");
                $("#result-econtactno1").addClass("hidden");
                $("#submit").removeClass("hidden");
            }
        }
      });return false;
    }
    else
    {
      $("#submit").addClass("hidden");
      $("#result-econtactno1").addClass("hidden");
      $("#result-econtactno1").removeClass("hidden");
    }
  });
     $("#aadhar").keyup(function(){  
    var num = $(this).val();
    var len = num.length;
    //alert(num);
    if(len == 12)
    {  
      $.ajax({
        type : 'POST',
        url  : '',
        data : $(this).serialize(),
        success : function(data)
        {
            value = data;
            if(value > 0)
            {
                $("#result-aadhar").removeClass("hidden");
                $("#result-aadhar").addClass("hidden");
                $("#submit").addClass("hidden");
            }
            else
            {
                $("#result-aadhar").addClass("hidden");
                $("#result-aadhar").addClass("hidden");
                $("#submit").removeClass("hidden");
            }
        }
      });return false;
    }
    else
    {
      $("#submit").addClass("hidden");
      $("#result-aadhar").addClass("hidden");
      $("#result-aadhar").removeClass("hidden");
    }
  });
 
 

</script>
<style type = "text/css">
body {
font-family: Inter,sans-serif;
font-size: 16px;
/*color : #fff;*/
background: #0a91d8; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #0a91d8, #2ebf91);
  background: linear-gradient(to right, #0a91d8, #2ebf91);
}
h2{
background: -webkit-linear-gradient(#176dc0,#1db0a1);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
}
.form-label{
background: -webkit-linear-gradient(#176dc0,#1db0a1);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;  
}
.txt{
width: 100%;
}
.jfUpload-button{
background-color: #fbfcff;
    color: #2c3345;
}
.banner-logo{
text-align: center;
}
.form-control{
height: 50px;
background-color: #ecedf3;
}

.card{
border-color: #000;
box-shadow: 0 0 15px rgba(0,0,0,.13);
padding-top : 20px;
border-radius: 8px;
width:800px;
margin-left: 150px ;
padding-right: 15px;
padding-left: 80px;
margin-bottom: 100px;
background-color: #ecedf3;


}

@media(max-width :768px){
.card{
width:100%;
margin-left: 0px ;
padding-left: 15px;
}

}
@media (min-width: 770px) and (max-width: 1100px){
.card{

margin-left: 80px ;

}
}

.form-matrix-headers.form-matrix-column-headers{
text-align: center;
   border-top: 1px solid #bdc3c7;
}
.form-matrix-column-headers, .form-matrix-row-headers{
   background-color: #bdc3c7;
}

.form-matrix-headers{
position: relative;
   font-size: .75em;
   font-weight: 500;
   padding: 12px;
}
</style>

</body>
</html>

