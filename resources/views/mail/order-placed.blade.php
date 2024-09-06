<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMN Radioactive</title>
</head>

<body>
    <h3>Hi, {{ $data['receiver'] }},</h3>
    <p>Your merch order has been placed, please wait for our confirmation email. Thank you for your order!!</p>

    <h3>Order Details:</h3>
    <p>Order ID: {{$data['order_id']}}</p>
    <p>Total Price: Rp. {{ number_format($data['total_price'], 0, ',', '.') }}</p>
    
    <p>For further details, click this link <a href="umnradioactive.com/merch/order/{{$data['order_id']}}">Order Details</a></p>


    <p>For further information feel free to DM our Insta @umnradioactive, or reach out to the contact info below
    </p>
    <p>Frickson Sufian</p>
    <p>WA 08116559500, LINE @frickson3</p>

    <p>Regards, </p>
    <p>Iggy</p>
    <hr>
    <p>Please note that merch bought via Radioactive's website may only be picked up at Universitas Multimedia Nusantara, we do not provide delivery services.</p>
    <p>Mohon dicatat bahwa barang yang dibeli melalui website Radioactive hanya bisa diambil di Universitas Multimedia Nusantara, kami tidak melayani pengiriman barang.</p>
</body>

</html>