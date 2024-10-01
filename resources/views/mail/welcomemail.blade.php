<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Demo content</div>

    {{-- Direct way to send mail. --}}
    {{-- <h3>{{ $data['subject'] }}</h3>
    <p>{{ $data['message'] }}</p> --}}
    
    {{-- Via welcomeEmail class witch we have created in app/Mail/welcomeEmail. --}}
    <h3>{{ $mailSubject }}</h3>
    <p>{{ $mailMessage }}</p>
    
</body>
</html>