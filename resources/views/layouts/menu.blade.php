@if(!isset($item['children']))
    @if (!strcmp(url()->current(), url($item['url'])))
    <li class="active">
    @else
    <li>
    @endif
        <a href="{{url($item['url'])}}">
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
