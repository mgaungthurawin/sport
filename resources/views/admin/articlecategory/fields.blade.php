
<div class="form-group col-sm-12">
    {!! Form::label('order', 'Order:') !!}
    {!! Form::text('order', null, ['class' => 'form-control', 'placeholder' => 'Order']) !!}
    @if ($errors->has('order'))
        <span class="text-danger">
            <strong>{{ $errors->first('order') }}</strong>
        </span>
   @endif
</div>

<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!} <span class="text-danger">*</span>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    @if ($errors->has('name'))
        <span class="text-danger">
            <strong>{{ $errors->first('name') }}</strong>
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
    {!! Form::label('description', 'Description:') !!} 
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
    @if ($errors->has('description'))
        <span class="text-danger">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
   @endif
</div>

<div class="col-md-12">
      <div class="form-group">
        <label><strong>Upload Image</strong></label>
        <input type="file" name="image_media" id="image_media" accept="image/*">
        {{ Form::hidden('media_path', 'CATEGORY_MEDIA_UPLOAD') }}
    </div>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('icon', 'Icon:') !!} 
    {!! Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'Icon']) !!}
    @if ($errors->has('icon'))
        <span class="text-danger">
            <strong>{{ $errors->first('icon') }}</strong>
        </span>
   @endif
</div>


{{--<div class="form-group">
    <label for="status" class="col-sm-6 control-label">Status </label>
    <div class="col-sm-6 col-md-6">
        <select name="status" class="form-control select2">
            <option value="{!! config('global')['STATUS_ACTIVE'] !!}">
                Active
            </option>
            <option value="{!! config('global')['STATUS_INACTIVE'] !!}">
                Inactive
            </option>
        </select>
    </div>
</div>--}}