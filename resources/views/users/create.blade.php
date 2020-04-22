@extends('layouts.foundation')
<!--LINE ONE IS EXTENDING master template-->
@section('content')

<!--line 3 this directive the content inside the div section created inside the master.blade.php-->
<div class = "row">
    <div class="col-md-12">
        <br />
        <h3 alin="center">Add User</h3>
        <br />
        <!--creating form with reques to user controller-->
        <form method="post" action ="{{url('users')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="first_name" class="
                form-control" placeholder="Enter First Name"/>
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="
                form-control" placeholder="Enter Last Name"/>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="
                form-control" placeholder="Enter a Valid email address"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"/>
            </div>
        </form>
    </div>
</div>
@endsection
