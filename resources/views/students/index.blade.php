@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-15">
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ implode('', $errors->all()) }}
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>Student Information</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <div class="col-md-2">
                            <form method="GET" class="mt-4" action="{{ route('student.index') }}">
                                <div class="form-group">
                                    <label for="exampleInputEmail">Search</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter name">
                                    <br/>
                                    <div>
                                    <button type="submit" class = "btn btn-success btn-sm">
                                        Search
                                    </button>
                                        <a href="{{ url('/student/create') }}" class="btn btn-primary btn-sm" title="Add New Student">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add Student
                                    </a>
                                </div>
                            </form>
                                
                            </div>

                        </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection