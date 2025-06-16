<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Task Management Application</title>

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
  />

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .header-container {
      text-align: center;
      padding: 3rem;
      background: white;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      max-width: 600px;
      width: 90%;
    }
    .header-container h1 {
      font-weight: 700;
      color: #4f46e5;
      margin-bottom: 1rem;
    }
    .header-container p {
      color: #6b7280;
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }
    .btn-primary {
      border-radius: 50px;
      padding: 0.75rem 2rem;
      font-weight: 600;
      font-size: 1.1rem;
    }
  </style>
</head>
<body>

  <div class="header-container">
    <h1>Task Management Application</h1>
    <p>Organize your work. Track your progress. Boost your productivity.</p>
    <a href="/tasks" class="btn btn-primary">View Tasks</a>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
  ></script>
</body>
</html>
