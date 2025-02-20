<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Admin - {{ $request['subject'] }}</title>
</head>
<body>
    <p>Hello Sir/Ma'am.</p>
    <p>You have received an enquiry from the below deatails -  </p>

    <p><strong>Name:</strong> {{ $request['name'] }}</p>
    <p><strong>Email:</strong> {{ $request['email'] }}</p>
    <p><strong>Phone:</strong> {{ $request['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $request['subject'] }}</p>
    <p><strong>Message:</strong> {{ $request['message'] }}</p>
  
</body>
</html>