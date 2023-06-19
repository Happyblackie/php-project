<?php 

    include('config/db_connect.php');

    $email = $title = $ingredients = '';
    $errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

    //  if(isset($_GET['submit']))
    //  {
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    //  }

    if(isset($_POST['submit']))
    {
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);

        //email check
        if(empty($_POST['email']))
        {
            //echo 'An email is required <br/>';
           $errors['email'] = 'An email is required <br/>';
        }
        else
        {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //echo 'email must be a valid email address';
                $errors['email'] = 'email must be a valid email address';
            }
            //echo htmlspecialchars($_POST['email']);
        }

        //title check
        if(empty($_POST['title']))
        {
            //echo 'A title is required <br/>';
            $errors['title'] = 'A title is required <br/>';
        }
        else
        {
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title))
            {
                //echo 'Title must be letters and spaces only';
                $errors['title']= 'Title must be letters and spaces only';
            }
            //echo htmlspecialchars($_POST['title']);
        }

        //ingredients check
        if(empty($_POST['ingredients']))
        {
            //echo 'Ingredients are required <br/>';
            $errors['ingredients'] = 'Ingredients are required <br/>';
        }
        else
        {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^[a-zA-Z\,]+$/', $ingredients))
            {
                //echo 'Ingredients must be a comma separated list';
                $errors['ingredients'] = 'Ingredients must be a comma separated list, not space separated';
            }
            //echo htmlspecialchars($_POST['ingredients']);
        }


        
        //checking general errors in the form if not.....
        //....redirect to home page...
        if(array_filter($errors))
        {
            //echo 'errors in the form';
        }
        else
        {
            //echo 'form is valid';

        //sending data to database
            //prevent malicious data getting into the database 
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            //create sql
            $sql = "INSERT INTO pizzas(email, title,ingredients)VALUES('$email','$title','$ingredients')";

        //save to db and check
            if(mysqli_query($conn, $sql))
            {
                //success then redirect to index page
                header('Location:index.php');
            }
            else
            {
                //error
                echo 'query error:' . mysqli_error($conn);
            }

            // header('Location:index.php');
        }


    } //end of POST ingredients


?>


<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php'); ?>
        <section class="container grey-text">
            <h4 class="center">Add a Pizza</h4>

            <!-- <form action="add.php" method="POST" class="white"> -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="white">
                <label for="">Your Email</label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
                <div class="red-text"><?php echo $errors['email']; ?></div>

                <label for="">Pizza Title</label>
                <input type="text" name="title"  value="<?php echo htmlspecialchars($title) ?>">
                <div class="red-text"><?php echo $errors['title']; ?></div>

                <label for="">Ingredients (comma separated):</label>
                <input type="text" name="ingredients"  value="<?php echo htmlspecialchars($ingredients) ?>">
                <div class="red-text"><?php echo $errors['ingredients']; ?></div>

                <div class="center">
                    <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
                </div>
            </form>
        </section>
    <?php include('templates/footer.php'); ?>

</html>