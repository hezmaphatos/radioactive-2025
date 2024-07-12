@extends('layouts.main')

@section('container')
<body>
    <h1>List Merch</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php $no = 1; ?>
        @foreach($merch as $obj)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$obj->name}}</td>
                <td>{{$obj->price}}</td>
                <td>
                    <a href="{{url($obj->id.'/cart/')}}">Add to Cart</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3"></td>
            <td>
                <a href="{{url('/cart')}}">Cart</a>
            </td>
        </tr>
    </table>
</body>
@endsection