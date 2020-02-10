
@extends('layout.app-admin')

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">View Room</h4>
                    <form action="{{ route('admin.room.update') }}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="{{ $room->room_number }}" name="room_number">
                                        <input type="hidden"  value="{{ $room->id }}" name="id">
                                        @if($errors->has('room_number'))
                                            <span class="text-danger">
                                                    {{ $errors->first('room_number') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="room_type_id" class="form-control">
                                            @foreach($roomTypes as $roomType)
                                                <option class="selected" value="{{ $roomType->id }}">
                                                    {{ $roomType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('room_type_id'))
                                            <span class="text-danger">
                                                    {{ $errors->first('room_type') }}
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">

                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-info">Submit</button>
                                <a href="{{ route('admin.room.delete',['id' => $room->id]) }}" class="btn btn-lg btn-dark">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
