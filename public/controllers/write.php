<script src="../scripts/write.js"></script>
<?php
   
    // Database connection
    include('conn.php');

        // public $contents;
        // public $book_name;
        // public $author_name;
        // public $author_id;
        // public $book_id;
        // public $genre;
        // public $category;
        // public $publish;


    

    if(isset($_POST['save'])) {
        

        $book_name = $_POST['Book_Name'];
        
         // Query if book exists in db with other author
         $sql = "SELECT * From writings WHERE book_name = '{$book_name}' ";
         $query = mysqli_query($connection, $sql);
         $rowCount = mysqli_num_rows($query);
 
         // If query fails, show the reason 
         if(!$query){
            die("SQL query failed: " . mysqli_error($connection));
         }

         if($rowCount > 0) {
            
            ?>
            <script type="text/javascript">
            Error_popup();
            </script>
            <?php
            return;
            }
            else{

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

                $sql = " INSERT INTO writings ( author_id,book_name,author_name,genre,category,publish,content) VALUES ('{$author_id}', '{$book_name}', '{$author_name}', '{$genre}', '{$category}', '{$publish}', '{$content}')";
                $query = mysqli_query($connection, $sql);

                if(!$query){
                    die("MySQL query failed!" . mysqli_error($connection));
                } 

            }
    }