@switch($page->id)
    @case (18)
    {!! Theme::partial('page.contact',['page' =>$page]) !!}
    @break
    @default
    {!! Theme::partial('page.content',['page' =>$page]) !!}

    @break
@endswitch
