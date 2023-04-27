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
          <p><a href="{{ asset('storage/' . $docuRequest->signature) }}">HIDDEN</a></p>
        </td>
        <td>
          @if ($docuRequest->status == 'Pending')
              <button type="button" class="btn btn-danger">Pending</button>
          @elseif ($docuRequest->status == 'Approved')
              <button type="button" class="btn btn-success">Approved</button>
          @endif 
        </td>
        <td class="text-center">
          <i class="bi bi-check" data-id="{{ $docuRequest->id }}"></i>
          <br>
          <i class="bi bi-printer-fill" id="print-table"></i>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  // Add a click event listener to the icon
  document.querySelector('.bi-check').addEventListener('click', function() {
    // Get the record ID and new status from the data attributes
    const id = this.dataset.id;
    const status = 'Approved';

    // Send an AJAX request to update the record in the database
    fetch(`/docurequests/${id}/update-status`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ status })
    })
    .then(response => {
      if (response.ok) {
        // Reload the page to show the updated status
        location.reload();
      } else {
        console.error('Failed to update status');
      }
    })
    .catch(error => {
      console.error(error);
    });
  });
</script>
