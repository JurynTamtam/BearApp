 <!--view that lists customers and their details. It uses the layouts.app layout for structure and styling--> 
@extends('layouts.app')

@section('title', 'Home Customer')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h3 class="mb-0">List Customer</h3>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table id="productTable" class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($customer->count() > 0)
                @foreach($customer as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">{{ $rs->contact }}</td>
                        <td class="align-middle">
                                <a href="{{ route('customers.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit <i class="fa fa-edit"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Customer not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection