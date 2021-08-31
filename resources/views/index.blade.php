<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <title>Shop</title>
</head>
<body>
    <div class='top'>
        <h1>Shop Items</h1>
        <div>
            <ul class='top-list'>
                <div class='item-list'>
                    <li>Apple</li>
                    <form action="{{url('scan')}}" method="post">
                        @csrf
                        <input type="hidden" name="product" value='apple' />
                        <button>SCAN</button>
                    </form>
                </div>
                <!-- <a href="/scan/apple"><button>Add</button></a> -->
                <div>
                    <li>Organge</li>
                    <form action="{{url('scan')}}" method="post">
                        @csrf
                        <input type="hidden" name="product" value='orange' />
                        <button>SCAN</button>
                    </form>
                </div>
                <!-- <a href="/scan/orange"><button>Add</button></a> -->
            </ul>
        </div>
    </div>
    <div class='cart'>
        <h2>Shop Cart</h2>
        @if(empty($items))
            <p>No Items</p>
        @else
            @foreach($items as $key=>$item)
            @if($item == 0)
            @else
            <p>{{$key}} <span><span style="font-size:1rem"> x </span>{{$item}}</span></p>
            @endif
            @endforeach
            <p class='total'>Total Price= ${{$total}}</p>
            <div class='discount'><a href="/discount">Apply Discount</a></div>
           <div><a href="/checkout"><button>Payment</button></a></div>
        @endif
    </div>
</body>
</html>