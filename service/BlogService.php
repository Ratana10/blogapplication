<?php
// include "../config/conn.php";

require_once(dirname(__FILE__) . '/../config/conn.php');

interface BlogService
{
  public function create($blog);
  public function update($blogId, $blog);
  public function getById($blogId);
}

class BlogServiceImpl implements BlogService
{
  private $sql;
  private $conn;

  public function __construct()
  {
    global $conn;
    $this->conn = $conn;
  }

  public function create($blog)
  {
    $this->sql = "INSERT INTO blogs (title, description, image) VALUES (
      '" . $blog->getTitle() . "', 
      '" . $blog->getDescription() . "', 
      '" . $blog->getImage() . "')";

    if ($this->conn->query($this->sql) === TRUE) {
      echo "
      <script>
        console.log('blog created successfully');
      </script>
      ";
    } else {
      echo "
      <script>
        console.log('Error:  . $this->sql .');
      </script>
      ";
    }
  }
  public function update($blogId, $blog)
  {
    
    $this->sql = " UPDATE blogs SET 
    title = '" . $blog->getTitle() . "', 
    description = '" . $blog->getDescription() . "', 
    image = '" . $blog->getImage() . "'
    WHERE id = '$blogId'
    ";

    if($this->conn->query($this->sql)){
     
      echo "
      <script>
        console.log('blog updated successfully ". $blog->toString(). "');
      </script>
      ";
    }else{
      echo "
      <script>
        console.log('Error:  . $this->sql .');
      </script>
      ";
    }

  }
  public function delete($blogId){
    $this->sql = "DELETE FROM blogs WHERE id = '$blogId' ";
    if ($this->conn->query($this->sql)) {
      echo "
      <script>
        console.log('blog deleted successfully ". $blogId. "');
      </script>
      ";
    } else {
      echo "
      <script>
        console.log('Error:  . $this->sql .');
      </script>
      ";
    }

  }
  public function getById($blogId)
  {
    $this->sql = "SELECT * FROM blogs WHERE id = '$blogId' ";

    if ($result =  $this->conn->query($this->sql)) {
      $row = $result->fetch_assoc();
      $blog = new Blog($row['id'], $row['title'], $row['description'], $row['image']);

      echo "
      <script>
        console.log('blog found ". $blog->toString(). "');
      </script>
      ";
    } else {
      echo "
      <script>
        console.log('Error:  . $this->sql .');
      </script>
      ";
    }
  }
}
