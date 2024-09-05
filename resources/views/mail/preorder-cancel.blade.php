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
    <p>We regret to inform you that your preorder has been cancelled. Please contact us for further information.</p>

    <p>Reason: {{$data['reason']}}</p>

    <h3>Preorder Details:</h3>
    <p>Preorder ID: {{$data['order_id']}}</p>
    <p>Total Price: Rp. {{ number_format($data['total_price'], 0, ',', '.') }}</p>
    
    <p>For further details, click this link <a href="umnradioactive.com/merch/order/{{$data['order_id']}}">Order Details</a></p>

    <p>Feel free to DM our Insta @umnradioactive, or reach out to the contact info below
    </p>
    <p>Frickson Sufian</p>
    <p>WA 08116559500, LINE @frickson3</p>

    <p>Regards, </p>
    <p>Iggy</p>
</body>

</html>