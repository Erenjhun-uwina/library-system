<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../style/style.css" rel="stylesheet" type=" text/css">
    <meta charset="UTF-8">
    <title>Page title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/index.js" defer></script>
</head>

<body>
    <nav id="top_nav">
        <div id="search_con">
            <input type="text" placeholder="search">
        </div>
        <p>School logo</p>
        <p class="nav_button"><i class="fa-regular fa-calendar"></i></p>
        <p class="nav_button"><i class="fa-regular fa-envelope"></i></p>
        <p class="nav_button"><i class="fa-solid fa-ellipsis-vertical"></i></p>
    </nav>
    <nav id="side_nav">
        <div><span>Staff</span></div>
        <div id="add_user"><span>User</span><i class="fa-solid fa-circle-plus"></i></div>
        <div id="add_book"><span>Book</span><i class="fa-solid fa-circle-plus"></i></div>
    </nav>

    <div id="new_container" class="card_con">

        <div class="card">
            <img src="https://i.pinimg.com/736x/4f/12/d9/4f12d987e42457b542f023f8131229fc.jpg">
        </div>
        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz_cwCZQPVsD9yt0WBcUeWHD4P9CSnnrw3Hw&usqp=CAU">
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZK06la_9PNbIl5P6nLfdTi-DRObWcxQaM3g&usqp=CAU">
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuwh12n-YySvZ1iTGVWGfQY-rC2BGVF4rFGw&usqp=CAU">
        </div>

        <div class="card">
            <img src="https://m.media-amazon.com/images/I/91iETCyq2tL.jpg">
        </div>

        <div class="card">
            <img src="https://i1.wp.com/www.getepic.com/learn/wp-content/uploads/2021/04/The-Girl-Who-Drank-the-Moon.jpeg?resize=584%2C886&ssl=1">
        </div>

        <div class="card">
            <img src="https://kbimages1-a.akamaihd.net/b62e8cd2-1abb-4f20-87c9-f87f2b78e46a/1200/1200/False/wolf-children-ame-yuki-light-novel.jpg">

        </div>

    </div>

    <!-- hidden sections -->
    
    <section id="user_regis" class="regis_form_con">
        <form class="regis_form">
            <h1>User Registration</h1>
            <hr>
            <input type="text" name="Studno" placeholder="Student Number">
            <input type="text" name="fn" placeholder="First Name"><br>
            <input type="text" name="ln" placeholder="Last Name">
            <input type="text" name="grade/section" placeholder="Grade/Section"><br>
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="contact_no" placeholder="Contact Number"><br>
            <Button type="submit">Create</Button>
        </form>
    </section>

    <section id="book_regis" class="regis_form_con">
        <form class="regis_form">
            <h1>Add Books</h1>
            <hr>

            <!-- Title`, `Author`, `Date_release`, `Genre`, `Cover_img`, `Publisher`, `Language -->
            
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="author" placeholder="Author"><br>
            <input type="text" name="date_release" placeholder="Date_release">
            <input type="text" name="genre" placeholder="Genre"><br>
            <label for ="img">Cover_img</label>
            <input type="file" name="cover_img" placeholder="Cover_img" accept="image/*"><br>
            <input type="text" name="publisher" placeholder="Publisher">
            <input type="text" name="language" placeholder="Language"><br>
            <Button type="submit">Create</Button>
        </form>
    </section>
</body>

</html>