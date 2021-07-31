<?php
   
    // Database connection
    include('conn.php');


    if(isset($_POST['check_save_btn'])) {
        $book_name = $_POST['book_name'];
        $sql = "SELECT * from writings where book_name = '{$book_name}'";
         $query = mysqli_query($connection , $sql);
        
         // If query fails, show the reason 
         if(!$query){
            die("SQL query failed: " . mysqli_error($connection));
         }

         $rowCount = mysqli_num_rows($query);
         if($rowCount > 0) {
            echo"Book Name already taken. Please try another one!";
            
    }
    else{
        echo"Available!";
    }
}
    

    if(isset($_POST['save'])) {
        

        $book_name = $_POST['Book_Name'];
         // Query if book exists in db with other author
        
         $sql = "SELECT * from writings where book_name = '{$book_name}'";
         $query = mysqli_query($connection , $sql);
        
         // If query fails, show the reason 
         if(!$query){
            die("SQL query failed: " . mysqli_error($connection));
         }

         $rowCount = mysqli_num_rows($query);

         if($rowCount == 0) {

                $author_name = $_SESSION['name'] ;
                $author_id = $_SESSION['id'];
                $genre = $_POST['genre'];
                $category = $_POST['category'];
                if(!empty($_POST['publish'])){
                    $publish = 1;
                }
                else {
                    $publish = 0;
                }
                $content = $_POST['content'];

                $sql = " INSERT INTO writings ( author_id,book_name,author_name,genre,category,publish,content) VALUES ('{$author_id}', '{$book_name}', '$author_name', '{$genre}', '{$category}', '{$publish}', '{$content}')";
                $query = mysqli_query($connection, $sql);

                if(!$query){
                    die("MySQL query failed!" . mysqli_error($connection));
                } 

            }
    }
    ?>