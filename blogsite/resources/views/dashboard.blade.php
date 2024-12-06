<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Existing styles */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            color: #333;
        }

        .card {
            margin: 1rem;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
            color: #1a73e8;
        }

        .card-subtitle {
            font-size: 1rem;
            color: #6c757d;
        }

        .card-text {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
        }

        .header {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a73e8;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #1a73e8;
            padding-bottom: 0.5rem;
            font-family: 'Arial Black', sans-serif;
        }

        .like-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 1rem;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
        }

        .like-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: #1a73e8;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .like-btn:hover {
            background-color: #145ab6;
        }

        .like-count {
            font-size: 1rem;
            font-weight: bold;
            color: #1a73e8;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
            }

            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
    <script>
        function shareBlog(blogTitle, blogUrl) {
            if (navigator.share) {
                navigator.share({
                    title: blogTitle,
                    url: blogUrl
                }).then(() => {
                    console.log('Shared successfully');
                }).catch((error) => {
                    console.log('Error sharing:', error);
                });
            } else {
                alert("Your browser doesn't support the Web Share API. You can manually copy the link: " + blogUrl);
            }
        }
    </script>
</head>
<body>
    <x-app-layout>




          <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="search" placeholder="Search Products" required>
            <button type="submit" class="btn btn-outline-success" ">Search</button>
        </form>

        <form action="{{ route('welcome') }}" method="GET">
            <button type="submit" class="btn btn-outline-success" ">HomePage</button>
        </form>


            </div>
          </nav>

        <center>
            @foreach ($blogs as $blog)
            <div class="card mb-3" style="max-width: 940px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if($blog->image)
                        <a href="{{ route('imagedashboard', $blog->id) }}">

                        <img src="{{ asset($blog->image) }}" class="img-fluid rounded-start" alt="Blog Image">
                        </a>
                        @else
                        No Image
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->name }}</h5>
                            <p class="card-text">{{ $blog->title }}</p>
                            <p class="card-text">{{ $blog->category }}</p>
                            <p class="card-text">{{ $blog->description }}</p>
                            <!-- Share Button -->
                            <button onclick="shareBlog('{{ $blog->name }}')">
                                Share this Blog
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </center>
    </x-app-layout>
</body>
</html>
