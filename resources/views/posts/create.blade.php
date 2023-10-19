<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel Daily | Livewire</title>
</head>
<body>
    <div>
        <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
        <h2> {{ $message = 'Mon message' }} </h2>
        <livewire:create-post repo="This is a repo" :sms="$message" />
    </div>
</body>
</html>