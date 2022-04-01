@extends('layouts.backend.app')

@section('title', 'Citizen')

@section('content')

<div class="modal fade left" id="addCitizenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-md modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sun-o" aria-hidden="true"> Ad</i>d New Citizen</h5>
            </div>

            <form class="needs-validation" novalidate="" action="{{ url('/save-citizen') }}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" id="user_id" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ward_name">Ward Name * :</label>
                            <select name="ward_name" class="form-control" required>
                                <option value="">Select Ward</option>
                                @foreach ($wards as $ward)
                                    <option value="{{ $ward->id }}">{{ $ward->ward_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="citizen_name">Citizen Name * :</label>
                            <input type="text" id="citizen_name" class="form-control" name="citizen_name" required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="gender">Gender * :</label>
                            <select name="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Address * :</label>
                            <textarea class="form-control" name="address" rows="3" cols="35" required=""></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="phone">Phone * :</label>
                            <input type="number" id="phone" class="form-control" name="phone" required />
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="col-6 text-left">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ---------------------------------------------------   END OF ADD MODAL FORM --------------------------------------------- --}}


<div class="main-content">

    <section class="section">
        <div class="section-header">
            <h1>Citizen</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Modules</a></div>
                <div class="breadcrumb-item">Loyalty</div>
            </div>
        </div>
    </section>

        <div class="section-body">

            <a href="#" style="float: right" class="btn btn-primary" data-toggle="modal" data-target="#addCitizenModal">Create Citizen</a>
            <br/>
            <br/>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Citizens</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped v_center" id="table-2">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">S/N</th>
                                            <th class="column-title">Corper Name </th>
                                            <th class="column-title">Ward Name </th>
                                            <th class="column-title">Citizen Name </th>
                                            <th class="column-title">Gender </th>
                                            <th class="column-title">Address </th>
                                            <th class="column-title">Phone </th>
                                            <th class="column-title">Created At</th>
                                            <th style="text-align: center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($citizens as $key => $citizen)
                                            <tr>
                                                <td>{{ $key +1 }}.</td>
                                                <td>{{ $citizen->name }}</td>
                                                <td>{{ $citizen->ward_name }}</td>
                                                <td>{{ $citizen->citizen_name }}</td>
                                                <td>{{ $citizen->gender }}</td>
                                                <td>{{ $citizen->address }}</td>
                                                <td>{{ $citizen->phone }}</td>
                                                <td>{!! htmlspecialchars_decode(date('D j<\s\up>S</\s\up> F Y', strtotime($citizen->created_at))) !!}</td>
                                                
                                                <td style="text-align: center">
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editCitizen{{ $citizen->id }}"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="#" class="btn btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteCitizen{{ $citizen->id }}"><i class="fa fa-trash"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- MODAL FOR EDITING AND UPDATING A CITIZEN -->

                                            <div class="modal fade left" id="editCitizen{{ $citizen->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-notify modal-md modal-right" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sun-o" aria-hidden="true"> Ed</i>it Citizen</h5>
                                                        
                                                        </div>

                                                        <form class="needs-validation" novalidate="" action="{{ url('/update-citizen', $citizen->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-body">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="ward_name">Ward Name * :</label>
                                                                        <select name="ward_name" class="form-control" required>
                                                                            <option value="">Select Ward</option>
                                                                            @foreach ($wards as $ward)
                                                                                <option {{ $ward->id == $citizen->ward_id ? 'selected' : '' }} value="{{ $ward->id }}">{{ $ward->ward_name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="citizen_name">Citizen Name * :</label>
                                                                        <input type="text" id="citizen_name" class="form-control" name="citizen_name" value="{{ $citizen->citizen_name }}" required />
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="gender"> Gender * :</label>
                                                                        <select name="gender" id="gender" class="form-control" required>
                                                                            <option value="" selected="false">Select Gender</option>
                                                                            <option value="male" {{ $citizen->gender == "male" ? 'selected' : '' }}>Male</option>
                                                                            <option value="female" {{ $citizen->gender == "female" ? 'selected' : '' }}>Female</option>
                                                                            <option value="other" {{ $citizen->gender == "other" ? 'selected' : '' }}>Other</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="address">Address * :</label>
                                                                        <textarea class="form-control" name="address" rows="3" cols="35" required="">{{ $citizen->address }}</textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="phone">Phone * :</label>
                                                                        <input type="number" id="phone" class="form-control" name="phone" value="{{ $citizen->phone }}" required />
                                                                    </div>
                                                                </div>

                                                                <div class="card-footer">
                                                                    <div class="col-6 text-left">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- MODAL FOR DELETING A CITIZEN -->

                                            <div class="modal fade left" id="deleteCitizen{{ $citizen->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-notify modal-md modal-right" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-sun-o" aria-hidden="true"> De</i>lete Citizen</h5>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form action="{{ URL::to('/delete-citizen', $citizen->id) }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                
                                                                <p> Are You Sure You Want To Delete {{ $citizen->citizen_name }} ?</p>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection


