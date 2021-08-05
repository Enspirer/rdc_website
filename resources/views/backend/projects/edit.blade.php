@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.projects.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $projects->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location" value="{{ $projects->location }}" required>
                        </div>
                        <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" required>
                                    @foreach($category as $cat)
                                        <option value="{{$cat->name}}" {{ $projects->category == $cat->name ? "selected" : "" }}> {{$cat->name}} </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" id="editor" class="form-control" name="description" rows="8" required> {{ $projects->description }} <br> </textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $projects->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $projects->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Publish in Homepage</label>
                            <select class="form-control" name="home_status" required>
                                <option value="Enabled" {{ $projects->other == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $projects->other == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="text" class="form-control" name="order" value="{{ $projects->order }}" required>
                        </div>
                        <div class="form-group">
                            <label>Feature Image</label>
                            <input type="file" class="form-control-file" name="feature_image">
                            <br>
                            <img src="{{url('files/projects',$projects->feature_image)}}" style="width: 40%;" alt="" >
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $projects->id }}"/>
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update Project</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

@endsection
