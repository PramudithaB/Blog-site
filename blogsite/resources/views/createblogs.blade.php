<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
    <style>
        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and layout */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            min-height: 100vh;
            color: #333;
        }

        /* Dashboard container */
        .dashboard {
            display: flex;
            width: 100%;
            transition: margin-left 0.3s ease;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(145deg, #2c3e50, #34495e);
            color: white;
            width: 250px;
            padding: 20px;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
            transition: width 0.3s ease;
        }

        .sidebar:hover {
            width: 270px;
        }

        .sidebar-header h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            letter-spacing: 1px;
        }

        .sidebar-nav ul {
            list-style-type: none;
        }

        .sidebar-nav ul li {
            margin-bottom: 20px;
        }

        .sidebar-nav ul li button {
            color: white;
            background: transparent;
            border: none;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .sidebar-nav ul li button:hover {
            background-color: #2980b9;
            transform: translateX(10px);
        }

        /* Logout button */
        .logout-button {
            color: white;
            background-color: #3498db;
            text-align: center;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .logout-button:hover {
           background-color: #3498db;

            transform: translateX(10px);
        }

        /* Form Styles */
        form {
            width: 80%;
            max-width: 600px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        legend {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: bold;
        }

        .form-label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #34495e;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Panel</h2>
        </div>
        <ul class="sidebar-nav">
            <button class="logout-button">Add Blogs</button>
            <button class="logout-button"><a href="{{ route('welcome') }}">HomePage</a></button>
            <button class="logout-button"><a href="{{ route('admindashboard') }}">admindashboard</a></button>

           
           
        </ul>
        
    </aside>

    <div class="main-content">
        <!-- Create Blog Form -->
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <legend>Add Blog</legend>
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name">

                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" class="form-control" placeholder="Enter the title" name="title">

                <label for="category" class="form-label">Select the category</label>
                <select id="category" name="category">
                    <option>Tecnology</option>
                    <option>Travel</option>
                    <option>Art</option>
                    <option>Sport</option>
                  </select>


                <label for="description" class="form-label">Description</label>
                <textarea id="description" class="form-control" rows="5" placeholder="Enter your description" name="description"></textarea>

                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" class="form-control" name="image" accept="image/*">

                <button type="submit">Add Blog</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
