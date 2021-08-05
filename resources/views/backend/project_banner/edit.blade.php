@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.project_banner.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">  
                        
                        <div class="form-group">
                        <label>Image ( dimensions = width: 1330px * height: 745px )</label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/project_banner',$project_banner->image)}}" style="width: 30%;" alt="" >
                        </div>

                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $project_banner->order }}" required>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $project_banner->id }}"/>
                <a href="{{route('admin.project_banner.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
