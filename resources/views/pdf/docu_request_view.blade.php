<!DOCTYPE html>
<html>
    <head>
        <title>EBarangay</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #666666; /* Storm color background */
            }

            .a4-container {
                width: 210mm; /* A4 paper width */
                height: 297mm; /* A4 paper height */
                background-color: #ffffff;
                border: 1px solid #000000;
                padding: 20mm; /* Margin inside the container */
                box-sizing: border-box;
                margin-top: 20mm; /* Margin on top of the container */
                margin-bottom: 20mm; /* Margin on bottom of the container */
            }

            .title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .body {
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="a4-container">
            <h1 class="title">Sample Title</h1>
            <p class="body">
                This is a sample text for the body of the container.
            </p>
            <p class="body">
                <p> Name: <u>{{ $docuRequest->firstname }} {{ $docuRequest->middlename }} {{ $docuRequest->lastname }}</u></p>
                <p>Address: <u>{{ $docuRequest->address }}</u></p>
                <p>Place of Birth: <u>{{ $docuRequest->pob }}</u></p>
                <p>Period of Residency in East Rembo: <u>{{ $docuRequest->por }}</u></p>
                <p>Registered West Rembo Voter: <u>{{ $docuRequest->voter === 'yes' ? 'Yes' : 'No' }}</u></p>
                <p>House Owner: <u>{{ $docuRequest->howner }}</u></p>
                <p>Relation to House Owner: <u>{{ $docuRequest->rhowner }}</u></p>          
            </p>
        </div>
    </body>
</html>
