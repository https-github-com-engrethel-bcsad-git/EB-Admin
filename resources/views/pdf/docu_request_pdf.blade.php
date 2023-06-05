@extends('layout')

<style>
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .header p {
        margin: 0;
    }

    .title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .clearance-info {
        margin-bottom: 20px;
    }

    .remarks {
        margin-bottom: 10px;
    }

    .remarks p {
        margin: 0;
    }

    .signature {
        margin-top: 20px;
    }

    .divider {
        margin-top: 80px;
        position: absolute;
        top: calc(80% - 0.5px);
        left: 0;
        width: 135%;
        height: 1px;
        background-color: #005CFF;
        z-index: -1;
        border-top: 0.5px solid #005CFF;
        margin-left: -90px;
    }

    /* HEADER */

    .header {
        margin-top: -20px;
        font-weight: bold;
        font-size: 14px;
        position: relative;
    }

    .header img {
        position: absolute;
        top: 0;
        margin-left: 0px;
    }

    .header img.left {
        left: 0;
        margin-left: -100px;
    }

    .header img.right {
        right: 0;
        margin-right: -100px;
    }

    .container1 {
        display: flex;
        flex-direction: row;
        margin-top:100px;
    }

    .column {
        flex-basis: 50%;
    }

    .row {
        padding: 10px;
        border: 1px solid black;
    }
    .container2{
        margin-top:60px;
        float:left;
        height:800px;
        width:50%;
        background-color:;
    }
   
    .container2{
        font-family: Serif ;
        margin-top:60px;
        float:left;
        height:800px;
        width:30%;
        background-color:;
    }
    
    .container3{
        margin-top:60px;
        margin-left:30px;
        width:100%;
        margin-right:-400px;
    }
   
   
    .content1,
.content2 {
    
    line-height: 1.0;
    margin: 0;
    padding: 0;
}

.content1 h4,
.content1 p,
.content2 h4,
.content2 p {
    margin: 0;
    padding: 0;
    font-size: 14px;
}
.container3 .date1{
    margin-left:400px;
}
.container3 .date{
    margin-top:4px;
    margin-left:520px;
}
.container3 .bar{
    margin-left:300px;
}
.container3 p{
    margin-right:0px;
}
.container3 .note p{
    width:100%;
    display:inline block;
}
.container3 .add {
    margin-left:50px;
}
.box-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
  }

  .box1 {
    width: 100px;
    height: 80px;
    border: 1px solid black;
    display: inline-block;
    margin-left: 220px;
   
  }
  .box {
    width: 100px;
    height: 80px;
    border: 1px solid black;
    display: inline-block;
  
  }
  .container3 .Sign{
    margin-left:150px;
  }
  .container3 .sec{
    margin-left:200px;
  }
  .container3 .note3 p{
    padding-top:20px;
    font-weight:bold;
    font-size:10px;
  }
</style>

<div class="container">
    <div class="header">
        <img class="left" src="img/east.png" alt="Left Image" width="160" height="150">
        <div>
            <p>Republic of the Philippines</p>
            <p>Barangay 26 West Rembo</p>
            <p>City of Makati</p>
            <p>Plaza Drive A. Mabini Street West Rembo, 1215</p>
            <p>Tel No. 8836-9732/ Hotline 8836-9733</p>
            <p>Email Add: westremboofficial@gmail.com</p>
        </div>
        <img class="right" src="img/makati.png" alt="Right Image" width="160" height="150">
        <hr class="divider">
    </div>
</div>
<div class="container2">
    <div class="content1">
    <h4>MARILOU BANDEJAS-DILLA</h4>
    <p>PUNONG BARANGAY</p>
        <p>Committee on Cleanliness & Beautification</p>
        <br>
        <h4>LEO E. BES</h4>
        <p>KAGAWAD</p>
        <p>Committee on Health & Sanitation</p>
        <br>
        <h4>NIÑO B. CUNANAN</h4>
        <p>KAGAWAD</p>
        <p>Committee on Finance & Appropriations</p>
        <p>Committee on Social Services Women & Family</p>
        <br>
        <h4>MANUEL O. COL-LONG</h4>
        <p>KAGAWAD</p>
        <p>Committee on Public Works & Development</p>
        <br>
        <h4>MILA G. DEL ROSARIO</h4>
        <p>KAGAWAD</p>
        <p>Committee on Health & Sanitation</p>
        <br>
        <h4>RODRIGO A. NERI</h4>
        <p>KAGAWAD</p>
        <p>Committee on Public Order & Safety</p>
        <br>
        <h4>JAMILA AGAGON-DINGLE</h4>
        <p>KAGAWAD</p>
        <p>Committee on Livelihood & Cooperatives</p>
        <br>
        <h4>VIEN-LORI BANIQUED</h4>
        <p>SK CHAIRPERSON</p>
        <p>Committee on Youth & Sports Development</p>
        <br>
        <h4>TERISITA Y. CARDINAL</h4>
        <p>BARANGAY SECRETARY</p>
        <br>
        <h4>CONSUELO V. SANTOS</h4>
        <p>BARANGAY TREASURER</p>
  </div>



</div>
<div class="container3">
    <div class="content2">
    <br>
    <h4>OFFICE OF THE PUNONG BARANGAY</h4>
           <p class="date1"><u>{{ $docuRequest->created_at }}</u><</p>
                       <p class="date"> Date</P>
                       <br>
         <h4 class="bar">BARANGAY CLEARANCE</h4>
         <br>
         <br>
         <h4>TO WHOME IT MAY CONCERN:</h4>
         <br>
         <br>
            <p>THIS IS TO CERTIFY that person whose name and thumb marks appearing </p> 
            <p>hereon has requested BARANGAY CLEARANCE from this office.</p>
            </p>
            <h4>REMARKS:_________________________________________________</h4>
            <br>
            <div class="add">
                <p> Name: <u>{{ $docuRequest->firstname }} {{ $docuRequest->middlename }} {{ $docuRequest->lastname }}</u></p>
                <p>Address: <u>{{ $docuRequest->address }}</u></p>
                <p>Place of Birth: <u>{{ $docuRequest->pob }}</u></p>
                <p>Period of Residency in East Rembo: <u>{{ $docuRequest->por }}</u></p>
                <p>Registered West Rembo Voter: <u>{{ $docuRequest->voter === 'yes' ? 'Yes' : 'No' }}</u></p>
                <p>House Owner: <u>{{ $docuRequest->howner }}</u></p>
                <p>Relation to House Owner: <u>{{ $docuRequest->rhowner }}</u></p>                
            </div>
            <br>
            <br>

        <p>This clearance is issued upon the request of the subject person to support</p>
        <p>his/her application__________________________________________________</p>
        <p>__________________________________________________________________</p>
        <br>
        <br>
      
        <p>CTC/VRR No. ______________</p>
            <p>Issued at: _________________</p>
            <p>Issued on: _________________</p>
            <p>O.R No. ___________________</p>
            <p>Barangay Clearance No. ______</p>
            <br>
            <div class="box-container">
      <div class="box1"></div>
      <div class="box"></div>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Right</p>
    </div>
    <br>
 <div class=" Sign">
  <p>__________________</p>
  <p>Application's signature</p>
  <br>
</div>
  <p>Fpr the Punong Barangay______________________________________________</p>
  <div class="sec">
  <p  >Barangay Kagawad/ Barangay Secretary  </p>
    <br>
</div>
<div class="note3">
  <p>NOTE: GOOD FOR SIX (6) MONTHS ONLY UPON ISSUANCE. NOT VALID WITHOUT BARANGAY SEAL  </p>
</div>

  </div>
</div>

