@extends('students/base')

@section('title')
    Index
@endsection

@section('style')
<style>
   
</style>
    
@endsection

@section('body')
<section class="my-5">
    <div class="d-flex justify-content-between mb-3">
        <h2 class="align-self-center">Students filterable Table</h2>
        <a href="{{ route('students.create') }}" class="text-decoration-none d-flex align-items-center fs-4"> <i class="bi bi-person-add"></i>&nbsp;Add student</a>
    </div>
    
<p>Type something in the input field to search the table for first names, last names, emails, or mobile numbers:</p>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>S_No</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
    @foreach($students as $student)
        <tr>
            {{-- <td>{{ $student->id }}</td> --}}
            <td>{{ ++$i }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->mobile }}</td>
            <td>
                @if($student->is_active)
                    <span class="badge rounded-pill bg-success">Active</span>
                @else
                <span class="badge rounded-pill bg-danger">Inactive</span>
                @endif
            </td>
            <td>
                <a href="{{ route('students.show', ['student' => $student->id]) }}" class="btn btn-primary "><i class="bi bi-eye"></i></a>
                 &nbsp;&nbsp;

                <a href="{{ route('students.edit', ['student' => $student]) }}" class="btn btn-success  "> <i class="bi bi-pencil-square"></i></a> &nbsp;&nbsp;
                
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center mt-4">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($students->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $students->previousPageUrl() }}" class="page-link" aria-label="Previous">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @for ($i = 1; $i <= $students->lastPage(); $i++)
                <li class="page-item {{ $students->currentPage() == $i ? 'active' : '' }}">
                    <a href="{{ $students->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($students->hasMorePages())
                <li class="page-item">
                    <a href="{{ $students->nextPageUrl() }}" class="page-link" aria-label="Next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>



<p>Note that we start the search in tbody to prevent filtering the table headers.</p>

</section>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

    
@endsection