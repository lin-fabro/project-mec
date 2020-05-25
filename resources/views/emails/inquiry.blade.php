<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meiko Tools</title>
</head>
<body>
    <p>Hello Admin,<p>
    <p>You received an inquiry from : {{ $details['first_name']}}</p>
    <p>Here are the details:</p>
    <p>Date: {{ $details['created_at'] }}</p>
    <p>Name: {{ $details['first_name'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Company: {{ $details['company'] }}</p>
    <p>Contact No: {{ $details['contact_no'] }}</p>
    <p>Inquiry: {{ $details['inquiry'] }}</p>
    <p>Thank You</p>
</body>
</html>