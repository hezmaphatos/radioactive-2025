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
    <p>Your merch order has been confirmed!!</p>
    <p>You can pick up your order at UMN Radio (Universitas Multimedia Nusantara, Gedung B Lantai 6). Feel free to contact us if you want to pick up your order!</p>

    <h3>Order Details:</h3>
    <p>Order ID: {{$data['order_id']}}</p>
    
    <p>For order details, click this link <a href="umnradioactive.com/merch/preorder/{{$data['order_id']}}">Preorder Details</a></p>

    <p>For further information feel free to DM our Insta @umnradioactive, or reach out to the contact info below
    </p>
    <p>Frickson Sufian</p>
    <p>WA 08116559500, LINE @frickson3</p>

    <p>Regards, </p>
    <p>Iggy</p>

</body>

</html>