<style>
    ul{
        display:flex;
        justify-content: center;
        align-items:center;
        margin-top:200px;    
    }
    ul li{
        list-style:none;
        margin: 0 10px;
        background-color: #eee;
        border: 1px outset yellow;
        border-radius: 50px;
        padding: 50px;
    }
    ul li a{
        color: red;
        text-decoration:none;
        font-size: 2em;
        text-transform: uppercase;
    }
    p{
        text-align:center;
        font-size: 2em;
    }
</style>
<body>
    <ul>
        <li><a href="{{route('Item')}}">ITEM</a></li>
        <li><a href="{{route('Customer')}}">Customer</a></li>
        <li><a href="{{route('Order_details')}}">Order List</a></li>
        <li><a href="{{route('Order')}}">Order</a></li>
    </ul>
@yield('content')