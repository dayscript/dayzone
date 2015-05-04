@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
    Beacon logs
    @parent
@stop

{{-- Content --}}
@section('content')
    <section class="content-header">
        <h1>Beacon Logs</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16"
                                                       data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Beacons</li>
            <li class="active">Logs</li>
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
                            Logs
                        </h4>
                    </div>
                    <br/>

                    <div class="panel-body">
                        @if ($pings->count() >= 1)

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>User</th>
                                    <th>Materia</th>
                                    <th>Beacon</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($pings as $ping)
                                    <tr>
                                        <td>{{{ $ping->created_at }}}</td>
                                        <td>{{{ $ping->user}}}</td>
                                        <td>{{{ $ping->materia }}}</td>
                                        <td>{{{ $beacon->beacon }}}</td>
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
