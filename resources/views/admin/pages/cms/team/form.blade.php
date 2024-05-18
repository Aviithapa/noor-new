@extends('admin.layout.app')

@section('content')



                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">
                                        @if(isset($model))
                                        Edit
                                        @else
                                        Create 
                                        @endif
                                         Service</h4>
                                    <p class="text-muted mb-0">
                                    </p>
                                </div>
                                <div class="card-body">
                                       @if(isset($model))
                                             <form method="POST" action="{{ route('team.update', ["team" => $model->id]) }}" enctype="multipart/form-data">
                                                 @method('PUT')
                                        @else
                                            <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                                        @endif
                                        @csrf
                              
                                        <div class="row"> 
                                         
                                            <div class="col-lg-6 col-md-6 col-sm-12"> 
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Title</label>
                                                    <input type="text" class="form-control" placeholder="Title" name="title"  required value="{{ isset($model) ? $model->title :old('title') }}"">
                                                      @if($errors->any())
                                                         {{ $errors->first('name') }}
                                                      @endif
                                                </div>
                                            </div> 
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Type </label>
                                                   
                                                    <select class="form-control" name="type" id="type" required >
                                                           <option value="{{ isset($model) ? $model->type : old('type') }}">{{ isset($model) ? $model->type : old('type') }}</option>
                                                            <option value="bod">Bod</option>
                                                            <option value="team">Team</option> 
                                                     </select>
                                                     @if($errors->any())
                                                         {{ $errors->first('type') }}
                                                      @endif
                                                </div>
                                            </div>

                                              <div class="form-group mb-3">
                                                <label> Facebook Link</label>
                                                <input type="text" class="form-control"  placeholder="Enter the Description" name="meta_link" value="{{ isset($model) ? $model->meta_link :old('meta_link') }}"/>
                                            </div>

                                             <div class="form-group mb-3">
                                                <label> Position</label>
                                                <input type="text" class="form-control"  placeholder="Enter the Description" name="excerpt" value="{{ isset($model) ? $model->excerpt :old('excerpt') }}"/>
                                            </div>


                                             <div class="form-group mb-3">
                                                <label> Content </label>
                                                <textarea class="form-control" id="content" placeholder="Enter the Description" rows="10" name="content">{{ isset($model) ? $model->content :old('content') }}</textarea>
                                            </div>
                                              <div class="form-group mb-3">
                                                <label class="form-label" for="inputFile"> Photo:</label>
                                               <input 
                                                type="file" 
                                                name="file" 
                                                id="inputFile"
                                                multiple
                                                class="form-control @error('files') is-invalid @enderror">
                                            </div>  
                                            @if(isset($model->image))   
                                                    <div class="col-lg-3 col-md-3 col-sm-6" style="position: relative;"> 
                                                        <img src="{{ getImage($model->image) }}" style="height: 200px;"/>
                                                        <a href="#" class="close-icon" data-toggle="modal" data-target="#confirmationModal{{ $model->id }}">
                                                            <i class="bi-x-circle" style="color:red"></i>
                                                        </a>
                                                    </div> 
                                            @endif           
                                        </div>
                                            
                                        <button class="btn btn-primary mt-5" type="submit">Submit form</button>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->


@endsection


@push('scripts')
     <script>
            ClassicEditor.create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
@endpush
