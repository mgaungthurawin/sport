@extends('admin.layout.app')

@section('content')
    <section class="content-header">
        <h1>
            Viewing Post
        </h1>
        <span class="breadcrumb"><a href="{!! route('textarticle.edit', [$article->id]) !!}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
            <a href="#" type="button" data-id="{{ $article->id }}"
               class="btn btn-sm btn-danger" data-toggle="modal"
               data-url="{{ url('admin/textarticle/'.$article->id) }}"
               data-target="#deleteFormModal"><i
                    class="fa fa-trash-o"></i>&nbsp;Delete</a>
            <a href='{{ route("textarticle.index") }}' class="btn btn-sm btn-warning"><i class="fa fa-list"></i>&nbsp;&nbsp;Return to List</a>
        </span>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Category') !!}
                        <p>{{ CategoryParnet($article->category->name) }}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Title') !!}
                        <p>{{$article->title}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Body') !!}
                        <p>{{$article->description}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Post Image') !!}
                        <p><img src="{{ asset($article->media->file_path . $article->media->file_name) }}"></p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Slug') !!}
                        <p>{{$article->slug}}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Status') !!}
                        <p>{!! showPrettyStatus($article->status) !!}</p>
                    </div>

                    <div class="form-group col-sm-12">
                        {!! Form::label('category', 'Created At') !!}
                        <p>{{$article->created_at}}</p>
                    </div>
                    

                    {{--<div class="form-group col-sm-12">
                        <img src="{{url($product->image)}}">
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection