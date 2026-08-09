@props(['title' => 'Laravel'])   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        nav > a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }
        nav > a:hover {
            color: #666;
        }
        main {
            margin-top: 20px;
        }
        .max-w-400 {
            max-width: 400px;
            margin: 0 auto;
        }
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }
        .card h1 {
            font-size: 20px;
            font-weight: bold;
        }
        .card p {
            font-size: 16px;
        }
        .card a {
            text-decoration: none;
            color: #333;
        }
        .card a:hover {
            color: #666;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact Us</a>
    </nav>

    <main>            
        {{ $slot }}
    </main>

    
</body>
</html>