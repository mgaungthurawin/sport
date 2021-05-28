<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!} <span class="text-danger">*</span>
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    @if ($errors->has('title'))
        <span class="text-danger">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
   @endif
</div>

<div class="form-group col-sm-12">
    {!! Form::label('slug', 'Slug:') !!} 
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
    @if ($errors->has('slug'))
        <span class="text-danger">
            <strong>{{ $errors->first('slug') }}</strong>
        </span>
   @endif
</div>

<div class="form-group col-sm-12">
    {!! Form::label('description', 'Description:') !!} <span class="text-danger">*</span>
    <textarea id="" class="form-control" name="description" rows="10" cols="50">{{Request::old('description')}}</textarea>
     @if ($errors->has('description'))
         <span class="text-danger">
             <strong>{{ $errors->first('description') }}</strong>
         </span>
    @endif
</div>

<div class="col-md-12">
      <div class="form-group">
        <label><strong>Upload Image</strong></label><span class="text-danger">*</span><br>
        <input type="file" name="image_media" id="image_media" accept="image/*">
        {{ Form::hidden('media_path', 'MEDIA_UPLOAD') }}
    </div>
</div>
