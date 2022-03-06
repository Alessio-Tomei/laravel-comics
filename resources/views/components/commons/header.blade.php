@php
    $navTabs = [
        [
            'tabName' => 'characters',
            'current' => false,
        ],
        [
            'tabName' => 'comics',
            'current' => true,
        ],
        [
            'tabName' => 'movie',
            'current' => false,
        ],
        [
            'tabName' => 'tv',
            'current' => false,
        ],
        [
            'tabName' => 'games',
            'current' => false,
        ],
        [
            'tabName' => 'collectibles',
            'current' => false,
        ],
        [
            'tabName' => 'videos',
            'current' => false,
        ],
        [
            'tabName' => 'fans',
            'current' => false,
        ],
        [
            'tabName' => 'news',
            'current' => false,
        ],
        [
            'tabName' => 'shop',
            'current' => false,
        ],
        
    ];   
@endphp

<header>
    <div class="container">
        <div class="container-logo">
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </div>
        <nav>
            <ul>
                @foreach ($navTabs as $navElement)
                    <li>
                        @if ($navElement['current'] == true)
                            <a href="" class="active"><span>{{$navElement['tabName']}}</span></a>
                        @else
                            <a href="" ><span>{{$navElement['tabName']}}</span></a>
                        @endif

                    </li> 
                @endforeach
                {{-- <li v-for="(navElement, index) in navTabs" :key="index">
                    <a href="" :class="{'active' : navElement.current}"><span>{{navElement.tabName}}</span></a>
                </li> --}}
            </ul>
        </nav>
    </div>
</header>