<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .dashboard-container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin: 50px auto;
      max-width: 900px;
    }

    h1 {
      color: #4CAF50;
      text-align: center;
    }

    .user-list {
      margin-top: 20px;
    }

    .user-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    .user-item img {
      max-width: 100px;
      max-height: 100px;
      border-radius: 5px;
    }

    .user-item .name {
      font-weight: bold;
    }

    .admin-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
      margin-top: 20px;
    }

    button {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .logout-btn {
      background-color: #f44336;
    }
  </style>
</head>
<body>

  <div class="dashboard-container">
    <h1>Admin Dashboard</h1>

    <div id="userList" class="user-list"></div>

    <div class="admin-buttons">
      <button onclick="clearData()">Clear All Data</button>
      <button onclick="exportData()">Export User Data</button>
      <button class="logout-btn" onclick="logout()">Logout</button>
    </div>
  </div>

  <script>
    // Simulate retrieving user data from localStorage
    const users = JSON.parse(localStorage.getItem("users")) || [];

    // Display user data
    function displayUsers() {
      const userList = document.getElementById("userList");
      userList.innerHTML = '';  // Clear previous data

      users.forEach((user, index) => {
        const userItem = document.createElement('div');
        userItem.classList.add('user-item');
        
        userItem.innerHTML = `
          <div>
            <span class="name">${user.name}</span><br>
            <span class="ip">IP: ${user.ip}</span>
          </div>
          <img src="${user.screenshot}" alt="User Screenshot">
        `;
        
        userList.appendChild(userItem);
      });
    }

    // Clear user data
    function clearData() {
      localStorage.removeItem("users");
      displayUsers();  // Refresh list
    }

    // Export user data (mock function)
    function exportData() {
      const userData = JSON.stringify(users, null, 2);
      const blob = new Blob([userData], { type: "application/json" });
      const link = document.createElement("a");
      link.href = URL.createObjectURL(blob);
      link.download = "user_data.json";
      link.click();
    }

    // Logout function
    function logout() {
      window.location.href = "admin_login.html";
    }

    // Initial call to display users
    displayUsers();
  </script>

</body>
</html>