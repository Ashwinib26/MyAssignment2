
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
        a:hover {
            background-color: #fff; 
            color: #fff; 
        }
        a.rounded-md:hover {
            background-color: #fff;
            color: #808080; 
        }
        .enter1
        {
            margin: 10px;
            padding: 10px;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            font-weight: bold;
        }
        .enter2
        {
            margin: 10px;
            padding: 10px;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            font-weight: bold;
        }
        .enter3
        {
            margin: 10px;
            padding: 10px;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            font-weight: bold;
        }
        .enter4
        {
            margin: 10px;
            padding: 10px;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            font-weight: bold;
        }
        .box
        {
            margin: 20px;
            padding: 20px;
            margin-left: 270px;
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
            <b> Add your Tale Here... </b>
        </div>
        <br><br><br>
        <div class="box">
            <div class="enter1">
                Enter Category of Story : <input type="text">
            </div>
            <div class="enter2">
                Enter Title of Story : <input type="text">
            </div>
            <div class="enter3">
                <input type="text" placeholder="write your story here" style="width: 900px; font-size: 16px; padding: 5px; height: 300px;">
            </div>
            <div class="enter4">
                Enter Moral of the Story : <input type="text">
                <br> <br>
                <input type="submit" name="Upload"> 
            </div>
        </div>
</body>
</html>


