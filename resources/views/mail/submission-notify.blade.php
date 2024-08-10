{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMN Radioactive 2023 | Order Submission</title>
</head>

<body>
    <h3>Dear {{ $data['receiver'] }},</h3>
    <p>We're thrilled to let you know that your order submission at UMN Radioactive 2023 was a success! 🥳</p>

    <p>Here are the details:</p>
    <p>Order ID: {{ $data['orderId'] }}</p>
    <p>Submission Date: {{ $data['submissionDate'] }}</p>

    <p>Now, sit back and relax because we've got your back! Our team will be going over your order in the next 1 business days (that's 24 hours, tops) to make sure everything is spot on.</p>

    <p>After we've double-checked everything, we'll start processing your order. Our usual processing time is 7 working days from the date of order confirmation. We take quality seriously, so this time frame helps us ensure your order is nothing short of amazing.
    </p>

    <p>Got questions or need more info? Feel free to slide into our Instagram DMs at @umnradioactive. We're here to chat and help with anything you need.
    </p>

    <p>Thanks a million for choosing UMN Radioactive 2023. We can't wait to get your order rolling and make sure you're one happy customer!🌟
    </p>

    <p>Best regards,</p>
    <p>Revy.</p>
</body>

</html>
