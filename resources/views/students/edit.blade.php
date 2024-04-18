@extends('students.base')

@section('title')
    
@endsection

@section('style')
    
@endsection

@section('body')

<section>
    <div class="row d-flex justify-content-center my-5">
        <div class="col-md-8">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset>
                    <legend>Student edit form</legend>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">Firstname</label>
                            <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Jhon"
                            value="{{ $student->first_name }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Lastname</label>
                            <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Doe" value="{{ $student->last_name }}">
                        </div>
                        <div class="col-md-12  mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Example@gmail.com" value="{{ $student->email }}">
                        </div>
                        <div class="col-md-12  mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input class="form-control" type="text" id="mobile" name="mobile" placeholder="(+XXX) XXX XXXX XXX" value="{{ $student->mobile }}">
                        </div>
                    </div>
                    <div class="my-3">
                        <button type="submit">Add</button>
                    </div>
                </fieldset>
            
            </form>
        </div>
    </div>
</section>

@endsection