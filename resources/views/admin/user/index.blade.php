@extends('layouts.app')

@section('content')
<style>
    .paginate_button {
        z-index: 3;
    color: #fff;
    border-radius: 30px !important;
    background-color: #321fdb ;
    border-color: #321fdb;
    }
</style>
<div class="container-fluid">
    <div class="card-header">
        <h1 class="text-black-50">Table User</h1>
        <div class="card">
        <table id="Usertable" class="table table-bordered ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>


</script>


@endsection