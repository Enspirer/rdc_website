@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.office.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $office->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Job Positions</label>
                            <input type="text" class="form-control" name="job_position" value="{{ $office->job_position }}" required>
                        </div>

                        <label>Qualifications &nbsp;&nbsp; (use "&lt;br&gt;"  tag for a new line.)</label> 
                        <textarea class="form-control" name="qualifications"  rows="5" >{{ $office->qualifications }}</textarea>
                        <br>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $office->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $office->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $office->order }}" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/office/',$office->image)}}" style="width: 30%;" alt="" >
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $office->id }}"/>
                <a href="{{route('admin.office.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
