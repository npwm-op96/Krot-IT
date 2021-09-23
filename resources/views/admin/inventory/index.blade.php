@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card-header">
        <h1 class="text-black-50">Table Inventory</h1>
        <div class="card">
        <table id="Inventorytable" class="table table-bordered ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        {{-- <th>Email</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('third_party_scripts')
<script>
    var url = "{{route('admin.inventory.getall')}}";
</script>
<script src="{{ asset('js/inventory/inventory.js') }}" defer></script>
@endsection