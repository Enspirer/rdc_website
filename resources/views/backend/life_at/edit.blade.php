@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <form action="{{route('admin.lifeat.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $lifeat->title }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="8" required> {{ $lifeat->description }} </textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $lifeat->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $lifeat->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $lifeat->order }}" required>
                        </div>
                        <div class="form-group">
                            <label>Feature Image </label>
                            <input type="file" class="form-control-file" name="feature_image">
                            <br>
                            <img src="{{url('files/life_at/',$lifeat->feature_image)}}" style="width: 40%;" alt="" >
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $lifeat->id }}"/>
                <a href="{{route('admin.lifeat.index')}}" class="btn btn-info pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
