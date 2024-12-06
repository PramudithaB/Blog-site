<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Archive</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
        }

        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #fff;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .col-md-4 img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 10px;
            color: #007bff;
        }

        .card-title:hover {
            text-decoration: underline;
        }

        .card-text {
            margin-bottom: 10px;
            font-size: 14px;
            line-height: 1.5;
        }

        .no-image {
            text-align: center;
            font-size: 14px;
            color: #aaa;
            padding: 30px;
        }

        .nav-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

        .nav-link:hover {
            background-color: #0056b3;
        }
          
footer {
    background: #333;
    color: #fff;
    padding: 40px;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

footer .sec {
    flex: 1;
    min-width: 250px;
}

footer .sec h2 {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

footer .sec ul {
    list-style: none;
}

footer .sec ul li {
    margin: 5px 0;
}

footer .sec .sci a {
    margin-right: 10px;
    font-size: 1.5rem;
    color: #fff;
    transition: color 0.3s;
}

footer .sec .sci a:hover {
    color: #ffcc00;
}

footer .sec .info p {
    margin-left: 10px;
}

footer .sec .info i {
    font-size: 1.5rem;
    color: #ffcc00;
}

/* Responsive Media Queries */
@media (max-width: 991px) {
    footer {
        padding: 40px;
        font-size: 16px;
    }

    footer .footer-container {
        flex-direction: column;
        align-items: center;
    }

    footer .sec {
        width: 100%;
        text-align: center;
    }
}

@media (max-width: 768px) {
    footer {
        padding: 30px;
    }

    footer .sec {
        text-align: center;
    }
}
  
    </style>
</head>
<body>
    
    <div class="container">
        <center>
            @foreach ($blogs as $blog)
            <div class="card">
                <div class="col-md-4">
                    @if($blog->image)
                    <a href="{{ route('imagedashboard', $blog->id) }}">
                        <img src="{{ asset($blog->image) }}" alt="Blog Image">
                    </a>
                    @else
                    <div class="no-image">No Image Available</div>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="{{ route('imagedashboard', $blog->id) }}" class="card-title">{{ $blog->name }}</a>
                        <p class="card-text"><strong>Title:</strong> {{ $blog->title }}</p>
                        <p class="card-text"><strong>Category:</strong> {{ $blog->category }}</p>
                        <p class="card-text">{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
        </center>
    </div>
    <footer class="footer">
        <div class="footer-section">
          <h3>About Us</h3>
          <p>We are a leading company providing quality services and products to our customers.</p>
        </div>
        <div class="footer-section">
         
        </div>
        <div class="footer-section">
          
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 Your Company. All rights reserved. </p>
        </div>
      </footer>
</body>
</body>
</html>
