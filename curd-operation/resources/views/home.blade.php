<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f6f9;
      font-family: 'Poppins', sans-serif;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    }
    .btn-primary {
      background-color: #4f46e5;
      border: none;
    }
    .btn-primary:hover {
      background-color: #4338ca;
    }
    table thead {
      background-color: #4f46e5;
      color: white;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #4f46e5;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="card p-4">
      <!-- Header -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold text-primary">🎓 Student Management</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
          ➕ Add New Student
        </button>
      </div>

      <!-- Search -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search student...">
        <button class="btn btn-outline-primary">Search</button>
      </div>

      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle text-center">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Course</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Example static data (replace with @foreach in Laravel) -->
            <tr>
              <td>1</td>
              <td>Rahul Kumar</td>
              <td>rahul@example.com</td>
              <td>Computer Science</td>
              <td>
                <button class="btn btn-sm btn-outline-primary me-2">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-4">
        <div class="modal-header bg-primary text-white rounded-top-4">
          <h5 class="modal-title" id="studentModalLabel">Add New Student</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control" placeholder="Enter name">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Email</label>
              <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Course</label>
              <input type="text" class="form-control" placeholder="Enter course name">
            </div>
            <button type="submit" class="btn btn-primary w-100">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
