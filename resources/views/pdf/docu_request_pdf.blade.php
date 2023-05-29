<style>
    .container {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        font-size: 12px;
        line-height: 1.4;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header p {
        margin: 0;
    }

    .title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .content {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .column {
        flex-basis: 45%;
    }

    .column p {
        margin: 0 0 5px;
    }

    .column:last-child {
        text-align: right;
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
</style>
@extends('layout')
<div class="container">
    <div class="header">
        <p>Republic of the Philippines</p>
        <p>Barangay 26 West Rembo</p>
        <p>City of Makati</p>
        <p>Plaza Drive A. Mabini Street West Rembo, 1215</p>
        <p>Tel No. 8836-9732/ Hotline 8836-9733</p>
        <p>Email Add: westremboofficial@gmail.com</p>
    </div>

    <div class="content">
        <div class="column">
            <p>MARILOU BANDEJAS-DILLA</p>
            <p>PUNONG BARANGAY</p>
            <p>Committee on Cleanliness & Beautification</p>
            <p>Date</p>
            <p>LEO E. BES</p>
            <p>KAGAWAD</p>
            <p>Committee on Health & Sanitation</p>
            <p>NIÑO B. CUNANAN</p>
            <p>KAGAWAD</p>
            <p>Committee on Finance & Appropriations</p>
            <p>Committee on Social Services Women & Family</p>
        </div>
        <div class="column">
            <p>MANUEL O. COL-LONG</p>
            <p>KAGAWAD</p>
            <p>Committee on Public Works & Development</p>
            <p>MILA G. DEL ROSARIO</p>
            <p>KAGAWAD</p>
            <p>Committee on Health & Sanitation</p>
            <p>RODRIGO A. NERI</p>
            <p>KAGAWAD</p>
            <p>Committee on Public Order & Safety</p>
            <p>JAMILA AGAGON-DINGLE</p>
            <p>KAGAWAD</p>
            <p>Committee on Livelihood & Cooperatives</p>
            <p>VIEN-LORI BANIQUED</p>
            <p>SK CHAIRPERSON</p>
            <p>Committee on Youth & Sports Development</p>
        </div>
    </div>

    <div class="clearance-info">
        <p>MARILOU BANDEJAS-DILLA</p>
        <p>PUNONG BARANGAY OFFICE OF THE PUNONG BARANGAY</p>
        <p>Committee on Cleanliness & Beautification</p>
        <p>Date</p>
        <p>LEO E. BES</p>
        <p>KAGAWAD</p>
        <p>Committee on Health & Sanitation</p>
        <p>NIÑO B. CUNANAN</p>
        <p>KAGAWAD</p>
        <p>Committee on Finance & Appropriations</p>
        <p>Committee on Social Services Women & Family</p>
        <p>MANUEL O. COL-LONG</p>
        <p>KAGAWAD</p>
        <p>Committee on Public Works & Development</p>
        <p>MILA G. DEL ROSARIO</p>
        <p>KAGAWAD</p>
        <p>Committee on Health & Sanitation</p>
        <p>RODRIGO A. NERI</p>
        <p>KAGAWAD</p>
        <p>Committee on Public Order & Safety</p>
        <p>JAMILA AGAGON-DINGLE</p>
        <p>KAGAWAD</p>
        <p>Committee on Livelihood & Cooperatives</p>
        <p>VIEN-LORI BANIQUED</p>
        <p>SK CHAIRPERSON</p>
        <p>Committee on Youth & Sports Development</p>
        <p>TERESITA Y. CARDINAL</p>
        <p>BARANGAY SECRETARY</p>
        <p>CONSUELO V. SANTOS</p>
        <p>BARANGAY TREASURER</p>
    </div>

    <p class="title">BARANGAY CLEARANCE</p>

    <p>TO WHOM IT MAY CONCERN:</p>
    <p>THIS IS TO CERTIFY that person whose name and thumb marks appearing hereon has requested BARANGAY CLEARANCE from this office.</p>

    <div class="remarks">
        <p>REMARKS:</p>
        <p>Name:{{ $docuRequest->firstname }} {{ $docuRequest->middlename }} {{ $docuRequest->lastname }}</p>
        <p>Address: {{ $docuRequest->address }}</p>
        <p>Date of Birth: {{ $docuRequest->bday }}</p>
        <p>Place of Birth: {{ $docuRequest->pob }}</p>
        <p>Period of Residency in Barangay West Rembo: _______________</p>
        <p>Registered West Rembo Voter: {{ $docuRequest->voter }}</p>
        <p>House Owner: {{ $docuRequest->howner }}</p>
        <p>Relation to House Owner: {{ $docuRequest->rhowner }}</p>
        <p>This clearance is issued upon the request of the subject person to support his/her application{{ $docuRequest->roa }}</p>
       
        <p>CTC/VRR No. ______________</p>
        <p>Issued at: _________________</p>
        <p>Issued on: _________________</p>
        <p>O.R No. ___________________</p>
        <p>Barangay Clearance No. ______</p>
    </div>

    <div class="signature">
        <p><strong>Signature : </strong><img src="{{ Storage::disk('s3')->url($docuRequest->image) }}" class="img-thumbnail"></p>
        <p><strong>Signature : </strong><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Ffake-signatures&psig=AOvVaw0ZcMkYktIoLeQed1rN2Fp4&ust=1685460910664000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOjXwKjtmv8CFQAAAAAdAAAAABAE" class="img-thumbnail"></p>
        <p>For the Punong Barangay: ________________________________</p>
        <p>Barangay Kagawad/Barangay Secretary</p>
    </div>

    <p class="note">NOTE: GOOD FOR SIX (6) MONTHS ONLY UPON ISSUANCE. NOT VALID WITHOUT BARANGAY SEAL</p>
</div>

