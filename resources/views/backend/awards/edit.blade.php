@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <form action="{{route('admin.awards.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Name</label>
                            <textarea type="text" class="form-control" name="name" rows="3" required> {{ $awards->name }} </textarea>
                        </div>
                        
                        <!-- <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="4" required> {{ $awards->description }} </textarea>
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Button Status</label>
                            <select class="form-control" name="button_status" required>
                                <option value="Enabled" {{ $awards->b_status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $awards->b_status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $awards->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $awards->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $awards->order }}" required>
                        </div>
                        <div class="form-group">
                            <label>Image </label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/awards/',$awards->image)}}" style="width: 30%;" alt="" >
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $awards->id }}"/>
                <a href="{{route('admin.awards.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
