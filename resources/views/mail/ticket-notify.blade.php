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
    <title>UMN RadioActive 2024</title>
</head>

<body>
    <h3>Dear {{ $data['receiver'] }},</h3>
    <p>We are delighted to inform you that your ticket booking has been successfully processed. Your tickets for the
        upcoming event have been issued and are ready for use. Please find the details below:</p>

    <p>Event: UMN Radioactive 2024's Closing Night : Neo World</p>
    <p>Date: 18 November 2024</p>
    <p>Time: 17.30 - until end</p>
    <p>Venue: Lapangan Parkir UMN</p>

    <h3>Ticket Details:</h3>
    <p>Ticket Type: {{ $data['ticket_type'] }}</p>
    <p>Quantity: {{ $data['quantity'] }}</p>

    <p>Booking Reference/Confirmation Number: {{ $data['ticket_code'] }}
        Please make a note of this number as it will be required for any further inquiries or changes to your booking.
    </p>

    <p>Please visit this link and show to our gate master:
    <p>
        {{ $data['ticket_code_packed'] }}
    </p>

    <p>For more information hit us up on DM at Instagram @umnradioactive.
    </p>

    <p>See you at Neo World Revends
    </p>

    <p>Best regards,</p>
    <p>Revy.</p>
</body>

</html>
