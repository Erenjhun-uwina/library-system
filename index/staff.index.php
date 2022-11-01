<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../style/style.css" rel="stylesheet" type=" text/css">
    <meta charset="UTF-8">
    <title>Page title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <p>Staff</p>
        <p>User</p>
    </nav>

    <div id="recommended_container" class="card_con">
        <div class="card"><i class="fa-solid fa-circle-plus"></i></div>

        <div class="card">2</div>

        <div class="card">3</div>

        <div class="card">4</div>

        <div class="card">5</div>

        <div class="card">6</div>

        <div class="card">7</div>

    </div>
    <div id="new_container" class="card_con">

        <div class="card"><i class="fa-solid fa-circle-plus"></i></div>

        <div class="card">9</div>

        <div class="card">10</div>

        <div class="card">11</div>

        <div class="card">12</div>

        <div class="card">13</div>

        <div class="card">14</div>

    </div>

    <!-- hidden sections -->
    
    <section id="user_regis" class="regis_form_con">
        <form class="regis_form">
            <h1>User Registration</h1>
            <hr>
            <input type="text" name="Studno" placeholder="Student Number">
            <input type="text" name="fn" placeholder="First Name">
            <input type="text" name="ln" placeholder="Last Name">
            <input type="text" name="grade/section" placeholder="Grade/Section">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="contact_no" placeholder="Contact Number">
            <Button type="submit">Create</Button>
        </form>
    </section>
</body>

</html>