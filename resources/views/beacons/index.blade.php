@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    Beacons
    @parent
@stop

{{-- Content --}}
@section('content')
    <section class="content-header">
        <h1>Beacons</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16"
                                                       data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Beacons</li>
            <li class="active">Listado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"><i class="livicon" data-name="oin-on" data-size="16"
                                                             data-loop="true" data-c="#fff" data-hc="white"></i>
                            Listado de Beacons
                        </h4>

                        <div class="pull-right">
                            <a href="{{ route('create/group') }}" class="btn btn-sm btn-default"><span
                                        class="glyphicon glyphicon-plus"></span> Agregar</a>
                        </div>
                    </div>
                    <br/>

                    <div class="panel-body">
                        @if ($beacons->count() >= 1)

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>UUID</th>
                                    <th>Nombre</th>
                                    <th>Major</th>
                                    <th>Minor</th>
                                    <th>Materia</th>
                                    <th>Mesa</th>
                                    <th>Imagen</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($beacons as $beacon)
                                    <tr>
                                        <td><a href="{{ action('BeaconsController@show',[$beacon->id]) }}">{{{ $beacon->uuid }}}</a></td>
                                        <td>{{{ $beacon->name }}}</td>
                                        <td>{{{ $beacon->major }}}</td>
                                        <td>{{{ $beacon->minor }}}</td>
                                        @if($beacon->materia)
                                            <td>{{{ $materias[$beacon->materia] }}}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td>{{{ $beacon->mesa }}}</td>
                                        <td><img src="{{{ $beacon->image }}}" alt="Beacon"/></td>
                                        <td>
                                            <a href="{{ action('BeaconsController@edit',[$beacon->id]) }}">
                                                <i class="livicon" data-name="edit" data-size="18" data-loop="true"
                                                   data-c="#428BCA" data-hc="#428BCA" title="edit beacon"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                                <i class="livicon" data-name="remove-alt" data-size="18"
                                                   data-loop="true" data-c="#f56954" data-hc="#f56954"
                                                   title="delete beacon"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">{{{ $beacon->mensaje }}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        @else
                            @lang('general.noresults')
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- row-->
    </section>




@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>$(function () {
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        });</script>
@stop
