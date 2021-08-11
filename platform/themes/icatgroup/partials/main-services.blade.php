<ul {!! clean($options) !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class=" @if ($row->active) active @endif">
            <a href="{{ $row->url }}" target="{{ $row->target }}">
               {{ $row->title }}
            </a>
        </li>
    @endforeach
</ul>
