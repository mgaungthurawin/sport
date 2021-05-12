<li class="{{ Request::is('category*') ? 'active' : '' }}">
    <a href="{{ route('category.index') }}"><i class="fa fa-edit"></i><span>Category</span></a>
</li>
<li class="{{ Request::is('textarticle*') ? 'active' : '' }}">
    <a href="{{ route('textarticle.index') }}"><i class="fa fa-edit"></i><span>Text Article</span></a>
</li>
<li class="{{ Request::is('videoarticle*') ? 'active' : '' }}">
    <a href="{{ route('videoarticle.index') }}"><i class="fa fa-edit"></i><span>Video Article</span></a>
</li>