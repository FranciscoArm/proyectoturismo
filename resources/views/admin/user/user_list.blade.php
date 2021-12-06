@extends('admin.layouts.template')
@section('main')
    <div class="page-title">
        <div class="title_left">
            <h3>Usuarios</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row">
                        <div class="col-md-3 form-group">

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <table class="table table-striped table-bordered golo-datatable">
                        <thead>
                        <tr>
                            <th width="3%">ID</th>
                            <th width="10%">Imagen</th>
                            <th width="15%">Nombre</th>
                            <th width="15%">Email</th>
                            <th width="15%">Estado</th>
                            <th width="15%">Es Administrador</th>
                            <th width="15%">Creado en</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <input type="checkbox" class="js-switch user_status" data-id="{{$user->id}}" {{isChecked($user->status, \App\Models\User::STATUS_ACTIVE)}}/>
                                </td>
                                <td>
                                    <input type="checkbox" class="js-switch user_admin" data-id="{{$user->id}}" {{isChecked($user->is_admin, \App\Models\User::USER_ADMIN)}}/>
                                </td>
                                <td>{{formatDate($user->created_at, 'H:i d/m/Y')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('scripts')
    <script src="{{asset('admin/js/page_user.js')}}"></script>
@endpush
