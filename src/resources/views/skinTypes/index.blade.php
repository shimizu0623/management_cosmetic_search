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
                                    <thead class="text-primary">
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
                                            <td>
                                                <form method="post" action="{{ route('skin_types.destroy', ['skin_type'=>$skinType]) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm bg-gradient-primary mb-0">
                                                        <i class="material-icons">delete</i>
                                                    </button>
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
    </div>

@endsection
