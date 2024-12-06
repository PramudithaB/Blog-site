<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Blog Details</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f4f7fc, #e3eff8);
            color: #333;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            background: #333;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: bold;
        }

        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #ffcc00 !important;
        }

        /* Container for content */
        .content-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 900px;
            padding: 30px;
            margin-top: 20px;
            overflow: hidden;
            animation: slideIn 1s ease-out;
        }

        h1 {
            font-size: 2.5rem;
            color: #2d3a47;
            margin-bottom: 20px;
            text-align: center;
            animation: fadeInUp 1s ease-out;
        }

        h3 {
            font-size: 1.4rem;
            color: #555;
            margin-bottom: 20px;
            text-align: center;
            animation: fadeInUp 1.5s ease-out;
        }

        p {
            font-size: 1.2rem;
            color: #666;
            text-align: center;
            margin-top: 20px;
            animation: fadeInUp 2s ease-out;
        }

        img {
            width: 100%;
            max-width: 700px;
            height: auto;
            border-radius: 10px;
            margin: 20px auto 0;
            display: block;
            transform: scale(0.9);
            opacity: 0;
            animation: fadeInImage 1.5s ease-out forwards;
        }

        /* Action Button */
        .action-button {
            display: inline-block;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            margin: 20px auto 0;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 25px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
            text-align: center;
            display: block;
            width: fit-content;
        }

        .action-button:hover {
            background: #0056b3;
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.6);
            transform: translateY(-3px);
        }

        .action-button:focus {
            outline: 3px solid #80bdff;
            outline-offset: 3px;
        }

        /* Share Icons Styling */
        .share-icons {
            text-align: center;
            margin-top: 20px;
        }

        .share-icons a {
            font-size: 2rem;
            color: #333;
            margin: 0 15px;
            transition: color 0.3s ease-in-out;
        }

        .share-icons a:hover {
            color: #007bff;
        }

        /* Keyframes for animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInImage {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Media Queries */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .content-container {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            h3 {
                font-size: 1.2rem;
            }

            .action-button {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }

            h3 {
                font-size: 1rem;
            }

            img {
                width: 90%;
            }
        }
       /* Footer Styling */
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
/* Footer container */
.footer {
  background-color: #2c3e50; /* Dark background for contrast */
  color: #ecf0f1; /* Light text color */
  padding: 40px 0;
  text-align: center;
  font-family: Arial, sans-serif;
}

/* Footer sections */
.footer .footer-section {
  margin-bottom: 30px;
}

/* Footer links */
.footer a {
  color: #ecf0f1;
  text-decoration: none;
  transition: color 0.3s ease;
}

.footer a:hover {
  color: #3498db; /* Add hover effect for links */
}

/* Footer social media icons */
.footer .social-icons {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 20px;
}

.footer .social-icons a {
  font-size: 24px;
  color: #ecf0f1;
  transition: transform 0.3s ease;
}

.footer .social-icons a:hover {
  transform: scale(1.1); /* Zoom effect on hover */
  color: #3498db;
}

/* Footer bottom */
.footer .footer-bottom {
  font-size: 14px;
  margin-top: 20px;
  color: #95a5a6;
}

/* Responsive design */
@media (max-width: 768px) {
  .footer {
    padding: 30px 15px;
  }
  .footer .social-icons {
    gap: 15px;
  }
}


            
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-container">
        @if($blog)
            <img src="{{ asset($blog->image) }}" alt="Blog Image">
            <h1>{{ $blog->title }}</h1>
            <h3>{{ $blog->description }}</h3>
        @else
            <p>Blog not found.</p>
        @endif
    
        <!-- Share Icons -->
        Share Blog<div class="share-icons">
            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" title="Share on Facebook"><i class="fab fa-facebook"></i></a>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
</html>
