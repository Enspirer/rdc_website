@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.press.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $press->title }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="5" required> {{ $press->description }} </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $press->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $press->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $press->order }}" required>
                        </div>

                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/press',$press->image)}}" style="width: 20%;" alt="" >
                        </div><br>
                        <div class="form-group">
                            <label>PDF</label>
                            <input type="file" class="form-control-file" name="pdf">
                            <br>
                            {{$press->pdf_upload}}
                        </div>
                        
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $press->id }}"/>
                <a href="{{route('admin.press.index')}}" class="btn btn-info pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
