@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <form action="{{route('admin.press.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control-file" name="image" required>
                        </div>
                        <div class="form-group">
                            <label>PDF</label>
                            <input type="file" class="form-control-file" name="pdf" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" required>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Create New</button><br>
            </div><br>
            
            

        </div>

    </form>

<br><br>
@endsection
