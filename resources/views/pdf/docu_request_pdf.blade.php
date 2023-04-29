@extends('layout')
<div class="container">
    <h1><strong>Barangay Clearance Form</strong></h1>
    <p><strong>Fullname : </strong>{{ $docuRequest->firstname }} {{ $docuRequest->middlename }} {{ $docuRequest->lastname }}</p>
    <p><strong>Address : </strong>{{ $docuRequest->address }}</p>
    <p><strong>Birthday : </strong>{{ $docuRequest->bday }}</p>
    <p><strong>Period of Residency : </strong>{{ $docuRequest->por }}</p>
    <p><strong>Place of Birth : </strong>{{ $docuRequest->pob }}</p>
    <p><strong>Voters Registration : </strong>{{ $docuRequest->voter }}</p>
    <p><strong>House Owner : </strong>{{ $docuRequest->howner }}</p>
    <p><strong>Relation to House Owner : </strong>{{ $docuRequest->rhowner }}</p>
    <p><strong>Reason for Application : </strong>{{ $docuRequest->roa }}</p>
    <p><strong>Signature : </strong><img src="{{ Storage::disk('s3')->url($docuRequest->image) }}" class="img-thumbnail"></p>
</div>
