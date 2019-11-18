@if(!isset($item['children']))
    <li>
        <a href="{{$item['url']}}">
            <i class="{{$item['icon']}}"></i>
            <span>{{$item['title']}}</span>
        </a>
    </li>
@else
    <li class="treeview">
        <a href="#">
            <i class="{{$item['icon']}}"></i>
            <span>{{$item['title']}}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

        <ul class="treeview-menu">
            @foreach($item['children'] as $item)
                @include('layouts.menu', $item)
            @endforeach
        </ul>
    </li>
@endif
