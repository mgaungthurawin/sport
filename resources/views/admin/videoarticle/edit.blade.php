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
                {!! Form::model($article, ['method' => 'PATCH','route' => ['videoarticle.update', $article->id], 'files' => 'true' ]) !!}
                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Category:') !!} <span class="text-danger">*</span>
                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if($category->id == $article->category_id)
                                        selected
                                    @endif
                                    >EN- {{ $category->name }} MM- {{ $category->slug }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                       @endif
                    </div>

                    @include('admin.videoarticle.fields')

                    <div class="col-md-12">
                        <div class="form-group">
                            <label><strong>Upload Video</strong></label><span class="text-danger">*</span><br>
                            <input type="file" name="video_media" id="video_media" accept="*">
                            {{ Form::hidden('media_path', 'MEDIA_UPLOAD') }}
                        </div>
                        @if(isset($article->videomedia))
                            <div class="box-footer">
                                <ul class="mailbox-attachments clearfix">
                                    <li>
                                        <span class="mailbox-attachment-icon has-img ">
                                            <video controls style="height:110px; width: 140px;">
                                                <source src="{{ url($article->videomedia->file_path.$article->videomedia->file_name) }}"
                                                        type="video/mp4">
                                                <source src="{{ url($article->videomedia->file_path.$article->videomedia->file_name) }}"
                                                        type="video/ogg">
                                              Your browser does not support the video tag.
                                            </video>
                                        </span>
                                        <div class="mailbox-attachment-info">{{ str_limit(strip_tags($article->videomedia->file_caption), 20) }}
                                            <span class="mailbox-attachment-size">{{ fileSizeFormat($article->videomedia->file_size)}}
                                                <a href="#" type="button" class="btn btn-danger btn-xs pull-right"
                                               data-id="{{$article->videomedia->id}}" data-toggle="modal"
                                               data-url="{{ url('admin/media/'.$article->media->id) }}"
                                               data-target="#deleteMediaModal"><i
                                                    class="fa fa-trash-o"></i></a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="form-group col-md-12">
                        <label for="status" class="control-label">Status </label>
                        <select name="status" class="form-control select2">
                            <option value="{!! config('global')['STATUS_ACTIVE'] !!}" <?php echo Request::old('status', isset($article) ? $article->status : null) == config('global')['STATUS_ACTIVE'] ? 'selected' : ''?>>
                                Active
                            </option>
                            <option value="{!! config('global')['STATUS_INACTIVE'] !!}" <?php echo Request::old('status', isset($article) ? $article->status : null) == config('global')['STATUS_INACTIVE'] ? 'selected' : ''?>>
                                Inactive
                            </option>
                        </select>
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
        var initPreview = "<?php echo null != $article->media ? url($article->media->file_path . $article->media->file_name) : url('img/default_preview.png') ?>";
        var initPreviewAlt = "<?php echo null != $article->media ? $article->media->file_caption : '' ?>";
        var dataId = "<?php echo null != $article->media ? $article->media->id : '' ?>";
        var dataUrl = "<?php echo null != $article->media ? url('admin/media/' . $article->media->id) : '' ?>";
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
            initialPreview: [
                @if(isset($article->media))
                   '<img src="' + initPreview + '" class="file-preview-image" alt="' + initPreviewAlt + '" title="' + initPreviewAlt + '" style="width:200px;height:200px">'
                @endif
            ],
            defaultPreviewContent: '<img src="' + preview_image + '" alt="Your Avatar" class="img-rounded" style="width:250px">',
            layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

        $('.kv-file-remove').attr('data-target', '#deleteMediaModal');
        $('.kv-file-remove').attr('data-id', dataId);
        $('.kv-file-remove').attr('data-url', dataUrl);
        $('.kv-file-remove').attr('data-toggle', 'modal');
    </script>
@endsection