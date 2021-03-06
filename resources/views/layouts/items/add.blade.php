@extends('layouts.app')

@section('content')
    <div class="col-md-4 col-sm-6 m-t-25">
        <form method="POST" action="/items/add" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Item Name :</label>
                <input type="text"  class="form-control" id="name" name="item_name" value="{{ old('item_name') }}" >
            </div>
            <div class="form-group">
                <label for="vendor">Vendor (select one):</label>
                <select class="form-control" name="vendor_id" id="vendor" value="{{ old('item_name') }}">
                    @foreach($vendors as $vendor)
                        <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type_id">Type (select one):</label>
                <select class="form-control" name="type_id" id="type">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="serial_number">Serial Number:</label>
                <input type="text"  class="form-control" id="serial_number" name="serial_number"  value="{{ old('serial_number') }}" >
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number"  step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}"  >
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="number"  step="0.01" class="form-control" id="weight" name="weight" value="{{old('weight')}}" >
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <select class="form-control" name="color" id="color">
                   <option value="black">Black</option>
                   <option value="red">Red</option>
                   <option value="blue">Blue</option>
                   <option value="green">Green</option>
                   <option value="white">White</option>
                </select>
            </div>
            <div class="form-group">
                <label for="releaseDate">Release date</label>
                <div class='input-group date' id='releaseDate'>
                    <input type='text' class="form-control" name="release_date" data-date-format="YYYY-MM-DD" value="{{old('release_date')}}" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" name="photo" id="logo" value="{{old('release_date')}}">
            </div>
            <div class="imageContainer">

            </div>
            <div class="form-group">
                <label for="tags">Tags:</label>
                <input type="text"   class="form-control" id="tags" name="tags" value="{{old('tags')}}" >
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" style="width:120px">Add</button>
            </div>

            <div class="form-group">
                @include('layouts.errors')
            </div>
        </form>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('js/itemsDataPicker.js') }}"></script>
    <script src="{{ asset('js/imgUploader.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://rawgit.com/aehlke/tag-it/master/js/tag-it.js"></script>

@endsection