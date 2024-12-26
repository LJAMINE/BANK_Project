<?php 
include('./config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./../style/style.css">
  <title>Account Management</title> 
</head>
<body>
  <button class="add-btn" onclick="showForm()">Add Account</button>

  <div class="form-container" id="formContainer">
    <h2>Add Account</h2>
    <form action="process_form.php" method="POST">
      <div class="form-group">
        <label for="accountNum">Account Number:</label>
        <input type="text" id="accountNum" name="accountNum" required />
      </div>

      <div class="form-group">
        <label for="holderName">Holder Name:</label>
        <input type="text" id="holderName" name="holderName" required />
      </div>

      <div class="form-group">
        <label for="balance">Balance:</label>
        <input type="number" id="balance" name="balance" step="0.01" required />
      </div>

      <div class="form-group">
        <label for="accountType">Account Type:</label>
        <select id="accountType" name="accountType" required>
          <option value="saving">Saving Account</option>
          <option value="current">Current Account</option>
          <option value="business">Business Account</option>
        </select>
      </div>

      <input type="submit" value="Add Account" />
      <button type="button" class="close-btn" onclick="hideForm()">Close</button>
    </form>
  </div>

  <table>
    <thead>
      <tr>
        <th>Account Number</th>
        <th>Holder Name</th>
        <th>Balance</th>
        <th>Account Type</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>12345</td>
        <td>John Doe</td>
        <td>$1000.00</td>
        <td>Saving</td>
        <td>
          <button class="action-btn edit-btn">Edit</button>
        </td>
          <td>
          <button class="action-btn delete-btn">Delete</button>

          </td>
      </tr>
    </tbody>
  </table>

  <script>
    function showForm() {
      document.getElementById('formContainer').style.display = 'block';
    }

    function hideForm() {
      document.getElementById('formContainer').style.display = 'none';
    }
  </script>
</body>
</html>
