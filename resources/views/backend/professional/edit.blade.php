@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.professional.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $professional->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Job Positions</label>
                            <input type="text" class="form-control" name="job_position" value="{{ $professional->job_position }}" required>
                        </div>

                        <label>Qualifications &nbsp;&nbsp; (use "&lt;br&gt;"  tag for a new line.)</label> 
                        <textarea class="form-control" name="qualifications"  rows="5" >{{ $professional->qualifications }}</textarea>
                        <br>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $professional->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $professional->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $professional->order }}" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control-file" name="image">
                            <br>
                            <img src="{{url('files/professional/',$professional->image)}}" style="width: 30%;" alt="" >
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $professional->id }}"/>
                <a href="{{route('admin.professional.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
