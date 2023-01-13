<div id="consultation-container">
<link rel="stylesheet" href="./assets/css/operator.css">
  <h1>List Konsultasi</h1>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Hari Konsultasi</th>
        <th>Jam</th>
        <th>No. HP</th>
        <th>Status Konsultasi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Connect to database
        $conn = new mysqli("localhost", "root", "", "db_form");
        // Get consultations
        $result = $conn->query("SELECT * FROM db_form");
        while ($consultation = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $consultation["id"] . "</td>";
          echo "<td>" . $consultation["name"] . "</td>";
          echo "<td>" . $consultation["email"] . "</td>";
          echo "<td>" . $consultation["day"] . "</td>";
          echo "<td>" . $consultation["Jam"] . "</td>";
          echo "<td>" . $consultation["phone"] . "</td>";
          echo "<td>" . $consultation["status"] . "</td>";
          echo "<td>";
          echo "<a href='accept.php?id=" . $consultation["id"] . "'>Selesai</a> ";
          echo "<a href='cancel.php?id=" . $consultation["id"] . "'>Batal</a>";
          echo "<a href='postpone.php?id=" . $consultation["id"] . "'>Ditunda</a>";
          echo "</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>
