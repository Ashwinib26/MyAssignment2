
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Stories</title>
    <style>
        body {
            background-color: #eee9e9;
            margin: 0;
            padding: 0;
        }
        .naev {
            width: 275px;
            height: 804px;
            background-color: #d9c1de;
            float: left;
            padding: 7px;
            margin: 0;
        }
        .title {
            height: 169px;
            width: 1505px;
            flex-direction: column;
            background-color: #b3ddd4;
            margin: 0px;
            padding: 10px;
        }
        .li {
            margin: 10px;
            padding: 10px;
            color: #000;
        }

        .titlename {
            margin-left: 500px;
            margin-top: 60px;
            padding: 10px;
            color: #000;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: xx-large;
        }
        .titlenames {
            margin-left: 370px;
            /* margin-left : 100px;
            padding: 150px; */
            color: #000;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: x-large;
        }
        .titlebar {
            position: fixed;
            top: 0;
            right: 0;
            padding: 10px;
            margin: 20px;
            text-align: right;
            z-index: 10;
            color: black;
            font-size:large;
        }
        ul li a {
            display: block;
            padding: 8px 16px;
            border-radius: 4px;
            margin-bottom: 8px;
            text-decoration: none;
            color: #000;
            font-size: large;
        }
        /* ul {
            margin-top: 8px;
            background-color: #d9c1de;
            font-size: large;
        }

        ul li a {
            display: block;
            padding: 8px 16px;
            border-radius: 4px;
            margin-bottom: 8px;
            text-decoration: none;
            color: #000;
            font-size: large;
        }

        ul li a:hover {
            background-color: #indigo-800;
            font-size: large;
        }

        ul li form {
            margin: 0;
            padding: 0;
            font-size: large;
        }

        ul li form a {
            display: block;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            color: #000;
            font-size: large;
        }

        ul li form a:hover {
            background-color: #indigo-800;
            font-size: large;
        }

        a.hover-bg-indigo-800:hover,
        .rounded-md {
            border-radius: 0.375rem; 
        }

        
        a.hover-bg-indigo-800:hover {
            background-color: #4f46e5; 
        } */
        a:hover {
            background-color: #fff; 
            color: #fff; 
        }
        a.rounded-md:hover {
            background-color: #fff;
            color: #808080; 
        }

    </style>
</head>
<body>
    <div class="naev">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFTHHSYUGcsIFpkPbLKYhnNvn8l6wSii_28g&usqp=CAU">
        <!-- <ul>
            <li class="li"> <a href="">Home </a> </li>
            <li class="li"> <a href="#">All Users </a> </li>
            <li class="li"> <a href="#">Create User </a> </li>
            <li class="li"> <a href="#">All Categories </a> </li>
            <li class="li"> <a href="C:\webprojects\Assignment_2\database_crud\resources\views\home.blade.php">All Stories </a> </li>
            <li class="li"> <a href="#">Upload Story </a> </li>
            <li class="li"> <a href="#">Log Out </a> </li>
        </ul> -->
        <ul class="mt-8">
            <br>
                <li>
                    <a
                        href="{{ route('home') }}"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Home</a
                    >
                    <a
                        href="{{ route('admin') }}"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Admin</a
                    >

        
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')"
                            class="block px-4 py-2 hover:bg-indigo-800 rounded-md cursor-pointer"
                            onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }}</a>
                    </form>
                </li>
            </ul>
    </div>
    <div class="title">
        <div class="titlebar">
            <?php if (auth()->check()): ?>
                <a href="<?= url('/admin') ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
            <?php else: ?>
                <a href="<?= route('login') ?>" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                <?php if (Route::has('register')): ?>
                    <a href="<?= route('register') ?>" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="titlename">
            <b>All Users</b>
        </div>
        <br><br><br><br><br><br><br>
        <div class="titlenames"> 
        <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mystory";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Function to fetch users from the database
            function getUsers($conn)
            {
                $sql = "SELECT id, name, email FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table border='1'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>
                                    <a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
                                    <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
                                </td>
                            </tr>";
                    }
                    echo "</table>";
                } else 
                {
                    echo "0 results";
                }
            }

            // Display users
            getUsers($conn);

            $conn->close();
        ?>

        <br>
        <a href="add.php">Add New User</a>

    </div>
</body>
</html>


