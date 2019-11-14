@if(!isset($item['children']))
    <li>
        <a href="{{$item['url']}}">
            <i class="{{$item['icon']}}"></i>
            <span>{{$item['title']}}</span>
        </a>
    </li>
@endif
