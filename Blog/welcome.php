<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aman Blogs</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #333;
            color: #fff;
        }
        .btn {
            padding: 10px 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            margin: 10px;  
            cursor: pointer;
        }
        input {
            display: block;
        }
        .name {
            padding: 10px 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            margin: 10px;
        }
        .blog {
            padding: 10px 15px;
            border-radius: 10px;
            border: none;
            outline: none;
            margin: 10px;
            width: 60%;
            height: 100px;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Blogrammer Blogs</h1>
    <form action="post.php" method="post">
        <input type="text" name="name" class="name" placeholder="Enter your name...">
        <textarea placeholder="Blog here..." type="text" name="blog" class="blog"></textarea>
        <input type="submit" class="btn" value="Post">
    </form>

    <!-- Blogs -->
    <h1>Recent Blogs</h1>
    <section class="blog_container">
    </section>
    
    <script src="./main.js"></script>
</body>
</html>
