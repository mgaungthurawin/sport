<li class="{{ Request::is('category*') ? 'active' : '' }}">
    <a href="{{ route('category.index') }}"><i class="fa fa-edit"></i><span>Category</span></a>
</li>
<li class="{{ Request::is('textaritcle*') ? 'active' : '' }}">
    <a href="{{ route('textaritcle.index') }}"><i class="fa fa-edit"></i><span>Text Article</span></a>
</li>