@extends('admin.layout.app')
@section('content')
    <section class="content-header">
        <h1>
            Create Brand
        </h1>
        <span class="breadcrumb"><a href='{{ route("articlecategory.index") }}' class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;Go To  Brand</a></span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::open(['route' => 'articlecategory.store', 'files' => 'true']) !!}
                    <div class="form-group col-sm-6">
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
                            <input type="file" name="image_media" id="image_media" accept="image/*" required="">
                            {{ Form::hidden('media_path', 'ARTICLE_MEDIA_UPLOAD') }}
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                       <a href="{!! route('articlecategory.index') !!}" class="btn btn-default">Cancel</a>
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