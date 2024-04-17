@extends('base')

@section('title')
    
@endsection

@section('style')
    
@endsection

@section('body')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Student Details</div>

            <div class="card-body">
                <div class="mb-3">
                    <strong>First Name:</strong> {{ $student->first_name }}
                </div>
                <div class="mb-3">
                    <strong>Last Name:</strong> {{ $student->last_name }}
                </div>
                <div class="mb-3">
                    <strong>Email:</strong> {{ $student->email }}
                </div>
                <div class="mb-3">
                    <strong>Mobile:</strong> {{ $student->mobile }}
                </div>
                <div class="mb-3">
                    <strong>Status:</strong> {{ $student->is_active ? 'Active' : 'Inactive' }}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection