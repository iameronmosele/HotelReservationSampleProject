@extends('layout.app-admin')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Rooms</h4>

                    <div class="table-responsive">
                        <table id="zero_config"
                               class="table table-striped table-bordered display no-wrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Number</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($rooms as $room)
                                @if(isset($room->roomType))
                                    <tr>
                                        <td>{{ $room->room_number }}</td>
                                        <td>{{ $room->roomType->name }}</td>
                                        <td>{{ $room->roomType->image }}</td>
                                        <td class="too-long-text">
                                            <a href="{{ route('admin.room.view',['id' => $room->id]) }}" class="btn btn-danger">
                                                <span class="fa fa-arrow-circle-right"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
@endsection
