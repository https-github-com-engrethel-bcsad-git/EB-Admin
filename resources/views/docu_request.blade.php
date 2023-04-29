@extends('layout')
<div class="container">
  <table class="table table-bordered table-striped">
    @csrf
    <thead>
      <tr>
        <th>#</th>
        <th>Requester ID</th>
        <th>Fullname</th>
        <th>Address</th>
        <th>Birthday</th>
        <th>Period of Residency</th>
        <th>Place of Birth</th>
        <th>Voters Registration</th>
        <th>House Owner</th>
        <th>Relation to House Owner</th>
        <th>Reason for Application</th>
        <th>Signature</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($docuRequests as $docuRequest)
      <tr>
        <td>{{ $docuRequest->id }}</td>
        <td>{{ $docuRequest->user_id }}</td>
        <td>{{ $docuRequest->firstname }} {{ $docuRequest->middlename }} {{ $docuRequest->lastname }}</td>
        <td>{{ $docuRequest->address }}</td>
        <td>{{ $docuRequest->bday }}</td>
        <td>{{ $docuRequest->por }}</td>
        <td>{{ $docuRequest->pob }}</td>
        <td>{{ $docuRequest->voter }}</td>
        <td>{{ $docuRequest->howner}}</td>
        <td>{{ $docuRequest->rhowner }}</td>
        <td>{{ $docuRequest->roa }}</td>
        <td>
          <p><a href="{{ Storage::disk('s3')->url($docuRequest->image) }}">HIDDEN</a></p>
          {{-- <img src="{{ Storage::disk('s3')->url($docuRequest->image) }}" class="img-thumbnail"> --}}
        </td>
        <td>
          @if ($docuRequest->status == 'Pending')
              <button type="button" class="btn btn-danger">Pending</button>
          @elseif ($docuRequest->status == 'Approved')
              <button type="button" class="btn btn-success">Approved</button>
          @endif 
        </td>
        <td class="text-center">
          <button type="button" class="btn btn-link">Approved</button>
          <br>
          <a href="/pdf/{{ $docuRequest->id }}/docu_request_pdf.blade" class="button1">Print</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
</script>
