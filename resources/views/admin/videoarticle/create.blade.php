@extends('admin.layout.app')
@section('content')
    <section class="content-header">
        <h1>
            Create Video Article
        </h1>
        <span class="breadcrumb"><a href='{{ route("videoarticle.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To Video Article</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'videoarticle.store', 'files' => 'true']) !!}
                    <div class="form-group col-sm-6">
                        {!! Form::label('category', 'Category:') !!} <span class="text-danger">*</span>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status" class="control-label">Status </label>
                        <select name="status" class="form-control select2">
                            <option value="{!! config('global')['STATUS_ACTIVE'] !!}">
                                Active
                            </option>
                            <option value="{!! config('global')['STATUS_INACTIVE'] !!}">
                                Inactive
                            </option>
                        </select>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('title', 'Title:') !!} <span class="text-danger">*</span>
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                       @endif
                    </div>

                    <div class="col-md-6">
                          <div class="form-group">
                            <label><strong>Upload Image</strong></label><span class="text-danger">*</span><br>
                            <input type="file" name="image_media" id="image_media" accept="image/*">
                            {{ Form::hidden('media_path', 'MEDIA_UPLOAD') }}
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                          <div class="form-group">
                            <label><strong>Upload Video</strong></label><span class="text-danger">*</span><br>
                            <input type="file" name="video_media" id="video_media" accept="mp4/*">
                            {{ Form::hidden('media_path', 'MEDIA_UPLOAD') }}
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('description', 'Description:') !!} <span class="text-danger">*</span>
                        <textarea id="description" class="form-control" name="description" rows="10" cols="50">{{Request::old('description')}}</textarea>
                         @if ($errors->has('description'))
                             <span class="text-danger">
                                 <strong>{{ $errors->first('description') }}</strong>
                             </span>
                        @endif
                    </div>

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('videoarticle.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/fileinput.min.css') }}">
    <script src="{{ asset('bower_components/fileinput.min.js') }}"></script>
    <script>
        var preview_image = "<?php echo url('images/default_preview.png') ?>";
        $("#video_media").fileinput({
            overwriteInitial: true,
            showClose: false,
            showCaption: true,
            showUpload: false,
            browseLabel: 'Browse File',
            removeLabel: 'Remove File',
            uploadUrl: "/file-upload-batch/2",
            browseIcon: '<i class="fa fa-cloud-upload"></i>',
            removeIcon: '<i class="fa fa-trash-o"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="' + preview_image + '" alt="Your Avatar" class="img-rounded" style="width:250px">',
            layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
            allowedFileExtensions: ["mp4"]
        });

        $("#image_media").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: true,
            showUpload: false,
            browseLabel: 'Browse File',
            removeLabel: 'Remove File',
            uploadUrl: "/file-upload-batch/2",
            browseIcon: '<i class="fa fa-cloud-upload"></i>',
            removeIcon: '<i class="fa fa-trash-o"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="' + preview_image + '" alt="Your Avatar" class="img-rounded" style="width:250px">',
            layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    </script>
@endsection