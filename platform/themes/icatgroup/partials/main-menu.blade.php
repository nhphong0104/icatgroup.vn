<ul {!! clean($options) !!}>
    @foreach ($menu_nodes as $key => $row)
        <li class=" @if ($row->active) active @endif">
            <a href="{{ $row->url }}" target="{{ $row->target }}">
                @if ($row->icon_font)<i class='{{ trim($row->icon_font) }}'></i> @endif{{ $row->title }}
            </a>
            @if ($row->has_child)
                {!!
                    Menu::generateMenu([
                        'menu'       => $menu,
                        'menu_nodes' => $row->child,
                        'view'       => 'main-menu',
                        'options'    => ['class' => 'dropdown'],
                    ])
                !!}
            @endif
        </li>
    @endforeach
</ul>
