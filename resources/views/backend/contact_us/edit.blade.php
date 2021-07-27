@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    
<div class="row">
        <div class="col">

            <div class="card">   

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.contactus.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View</h5>
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" style="color:black" class="form-control" name="title" value="{{ $edit->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" style="color:black" class="form-control" name="order" value="{{ $edit->phone }}" readonly>
                        </div> 
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" style="color:black" class="form-control" name="order" value="{{ $edit->email }}" readonly>
                        </div> 
                        
                        <label>Message</label>
                        <textarea style="color:black" class="form-control" name="description" rows="5" readonly> {{ $edit->message }} </textarea>
                        <br>                                         
                                                
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $edit->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Viewed">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
