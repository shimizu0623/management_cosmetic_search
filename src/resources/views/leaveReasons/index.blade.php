@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Icons')])
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Leave Reasons</h4>
                            <p class="card-category"> All Leave Reasons of Cosmetic Search</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                            Leave date
                                            </th>
                                            <th>
                                            Reason
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($leaveReasons as $leaveReason)
                                        <tr>
                                            <td>
                                            {{$leaveReason->leave_date}}
                                            </td>
                                            <td>
                                            {{$leaveReason->reason}}
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
    </div>

@endsection
