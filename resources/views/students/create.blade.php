@extends('students/base')

@section('title')
    Insert
@endsection

@section('style')
<style>
   
</style>
    
@endsection

@section('body')
<section>
    <div class="row d-flex justify-content-center my-5">
        <div class="col-md-8">
            <form action="{{ route('students.store')}}" method="POST">
                @csrf
                <fieldset>
                    <legend>Student Registration form</legend>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">Firstname</label>
                            <input class="form-control" type="text" id="first_name" name="first_name" placeholder="Jhon">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Lastname</label>
                            <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Doe">
                        </div>
                        <div class="col-md-12  mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Example@gmail.com">
                        </div>
                        <div class="col-md-12  mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input class="form-control" type="text" id="mobile" name="mobile" placeholder="(+XXX) XXX XXXX XXX">
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