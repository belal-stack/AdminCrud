@extends('admin.layouts.app')

@section('css')
    
@endsection

@section('content')

<div class="content">

    @if (Session()->has('message'))
    <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ Session()->get('message') }}</strong>
    </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Create User</small></h3>
            <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                <i class="si si-close"></i>
            </button>
            </div>
        </div>

        <div class="block-content">
            <form action="{{'/admin/user/'.$user->id}}" method="post">
                @csrf
                @method('patch')

                <div class="form-group row">
                    <div class="col-md-12">
                      <div class="form-material">
                        <input type="text" required class="form-control" value="{{$user->name}}" id="name" name="name">
                        <label for="category"> Name</label>
                      </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                      <div class="form-material">
                        <input type="text" readonly required class="form-control" value="{{$user->email}}" id="email" name="email" >
                        <label for="category">Email</label>
                      </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                      <div class="form-material">
                        <input type="number" required class="form-control" value="{{$user->phone}}" id="phone" name="phone" >
                        <label for="phone">Phone</label>
                      </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                      <div class="form-material">
                        <input type="text" required class="form-control" value="{{$user->address}}" id="address" name="address" >
                        <label for="address">Address</label>
                      </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-material">
                            <select class="form-control" id="gender" name="gender">
                                @foreach($genders as $gender)
                                    <option value="{{$gender->id}}" {{ $user->gender_id == $gender->id ? 'selected="selected"' : '' }}>{{$gender->type}}</option>    
                                @endforeach
                            </select>
                            <label for="address">Gender</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-material">
                            <select class="form-control" id="role" name="role">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" {{ $user->role_id == $role->id ? 'selected="selected"' : '' }}>{{$role->name}}</option>    
                                @endforeach
                            </select>
                            <label for="role">Roles</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-material">
                            <button type="submit" class="btn btn-alt-success btn-block" > <i class="fa fa-check"></i> Update User</button>
                        </div>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
    // function getCities(id)
    // {
    //     $("#city").find("option").remove().end()
    //     $("#city").append(`<option value="">Choose your city...</option>`)
    //     $.ajax({
    //         method:'Get',
    //         url:'/get/'+id+'/city'
    //     }).done(function(resp){
    //         console.log(resp)
    //         var data;
    //         $(resp).each(function( index,val ) {
    //             data+='<option value='+val.city_name+'>'+val.city_name+'</option>';
    //         });
    //         $('#city').append(data);
    //         return;
    //     }).fail(function(resp){
    //         alert(resp+'went wrong')
    //         return;
    //     })
    // }
</script>

@endsection