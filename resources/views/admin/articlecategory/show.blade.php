@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Viewing Category
        </h1>
        <span class="breadcrumb"><a href="{!! route('category.edit', [$category->id]) !!}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
            <a href='{{ route("category.index") }}' class="btn btn-sm btn-warning"><i class="fa fa-list"></i>&nbsp;&nbsp;Return to List</a>
        </span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'ID') !!}
                        <p>{{$category->id}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Parent') !!}
                        <p>{{ CategoryParnet($category->parent) }}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Order') !!}
                        <p>{{$category->order}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Name') !!}
                        <p>{{$category->name}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Slug') !!}
                        <p>{{$category->slug}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Description') !!}
                        <p>{{$category->description}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Image') !!}
                        <p>{{$category->media_id}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Created At') !!}
                        <p>{{$category->created_at}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Icon') !!}
                        <p>{{$category->icon}}</p>
                    </div>
                    

                    {{--<div class="form-group col-sm-12">
                        <img src="{{url($product->image)}}">
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection