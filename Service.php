<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include  './repository/serviseRepository.php';
include_once 'database/DatabaseConnection.php';
include 'include/dashboardHeader.php';
?>


    <section class="main">
    <div class="admin-container">

  <main class="admin-content">
    <form id="serviceCreationForm" method="post">
   
        <label for="name">Service Name:</label>
        <input type="text" id="name" name="name" required/>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit" class="add-service-btn">Create Service</button>
    </form>
</main>
</div>
     
    </section>
  </div>
</span>

</body>
</html>















