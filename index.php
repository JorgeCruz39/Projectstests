<html>
  <head>
    <title>QA System</title>
  </head>
  <body>
    <h1>Ask a Question</h1>
    <form method="post">
      <input type="text" name="query" placeholder="Enter your question here">
      <input type="submit" value="Submit">
    </form>
    <?php
      if (isset($_POST['query'])) {
        $query = $_POST['query'];
        echo "<h2>You asked:</h2>";
        echo "<p>" . $query . "</p>";
      }
    ?>
  </body>
</html>