@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Icons')])
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">SkinTypes</h4>
                            <p class="card-category"> All SkinTypes of Cosmetic Search</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                            Name
                                            </th>
                                            <th>
                                            Detail
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($skinTypes as $skinType)
                                        <tr>
                                            <td>
                                            {{$skinType->name}}
                                            </td>
                                            <td>
                                            {{$skinType->detail}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Create SkinType</h4>
                        </div>
                        <div class="card-body">
                            <label class="form-label">New SkinType Name</label>
                            <form method="post" action="/skin_types">
                                @csrf
                                <input name="name" class="form-control" cols="30" rows="2" onfocus="focused(this)" onfocusout="defocused(this)">
                                <label class="form-label">Detail</label>
                                <input name="detail" class="form-control" cols="30" rows="2" onfocus="focused(this)" onfocusout="defocused(this)">
                                @if (session('error_message'))
                                    @foreach (session('error_message')->all() as $message)
                                        <p><span style="color: red;">{{ $message }}</span></p>
                                    @endforeach
                                @endif
                                <br>
                                <button type="submit" class="btn btn-sm bg-gradient-primary mb-0">
                                        <i class="material-icons text-white pe-2">add</i>
                                        Create
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
