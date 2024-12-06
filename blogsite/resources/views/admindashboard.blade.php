<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Resetting some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body and general layout */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      height: 100vh;
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

    .sidebar-nav ul li a,
    .sidebar-nav ul li button {
      color: white;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .sidebar-nav ul li a:hover,
    .sidebar-nav ul li button:hover {
      background-color: #2980b9;
      transform: translateX(10px);
    }

    /* Button for UserDashboard */
    .user-dashboard-button {
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

    .user-dashboard-button:hover {
      background-color: #2980b9;
      transform: translateX(10px);
    }

    /* Logout button */
    .logout-button {
      color: white;
      background-color: #e74c3c;
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
      background-color: #c0392b;
      transform: translateX(10px);
    }

    /* Main content area */
    .main-content {
      flex: 1;
      padding: 30px;
      background-color: #ecf0f1;
    }

    .header h1 {
      font-size: 2.5rem;
      margin-bottom: 30px;
      color: #2c3e50;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Control Panel */
    .control-panel {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .panel {
      background-color: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 30%;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .panel:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .panel h2 {
      font-size: 1.8rem;
      margin-bottom: 15px;
      color: #34495e;
    }

    .panel p {
      font-size: 2.5rem;
      font-weight: bold;
      color: #3498db;
    }

    /* Media Queries for responsive design */
    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
        padding: 15px;
      }

      .sidebar-header h2 {
        font-size: 1.6rem;
      }

      .panel {
        width: 45%;
      }

      .control-panel {
        flex-direction: column;
        align-items: center;
      }
    }

    @media (max-width: 480px) {
      .sidebar {
        width: 150px;
      }

      .header h1 {
        font-size: 2rem;
      }

      .panel {
        width: 100%;
        margin-bottom: 20px;
      }
    }

  </style>
</head>
<body>

  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-header">
        <h2>Admin Panel</h2>
      </div>
      <ul>
        <nav class="sidebar-nav">
          <form action="{{ route('dashboard') }}" method="get">
            <button type="submit" class="user-dashboard-button">User Dashboard</button>
          </form>

          <form action="{{ route('createblogs') }}" method="get">
            <button type="submit" class="user-dashboard-button">Add Blogs</button>
          </form>
          <form action="{{ route('welcome') }}" method="get">
            <button type="submit" class="user-dashboard-button">Home Page</button>
          </form>
          
        </nav>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Header -->
      <header class="header">
        <h1> Admin Dashboard</h1>
      </header>

      <!-- Control Panel -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $blog)
          <tr>
            <th scope="row">{{ $blog->id }}</th>
            <td>{{ $blog->name }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->category }}</td>
            <td>{{ $blog->description }}</td>
            <td>
              @if($blog->image)
                <img src="{{ asset($blog->image) }}" alt="Blog Image" style="max-width: 100px; height: auto;">
              @else
                No Image
              @endif
            </td>
            <td>
              <td>
                <a href="{{ route('edit', ['blog_id' => $blog->id]) }}" class="btn btn-primary">Edit</a>
              </td>
                            <td>
              <form  method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route('delete', ['blog_id' => $blog->id]) }}" 
                  class="btn btn-danger" 
                  onclick="return confirmDelete()">Delete</              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </main>
  </div>

</body>
<script>
  function confirmDelete() {
      return confirm("Are you sure you want to delete this blog?");
  }
</script>
</html>
