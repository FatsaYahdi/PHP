<?php
error_reporting(0);
$errors = "";

$db = mysqli_connect('localhost','root','','todo');

if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    if (empty($task)) {
        $errors = "minimal ngisi";
    } else {
        mysqli_query($db, "INSERT INTO `tasks`(`task`) VALUES ('$task')");
        header('location: index.php');
    }
}

if(isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
    header('location: index.php');
}

$tasks = mysqli_query($db, "SELECT * FROM tasks");
?>

<!DOCTYPE html>

<head>
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    #btn-del {
        color : red;
    }
</style>


<body class="max-w-full">
<div class="flex justify-center items-center h-screen bg-black ">
    <div class="container w-full max-w-2xl text-white">
        <div class="text-3xl text-center font-bold mb-3 hover:cursor-default">Todo List</div>

        <?php if (isset($errors)) { ?>
            <p class="text-red-600 text-center font-bold p-3"><?= $errors; ?></p>
        <?php } ?>

        <div>
            <form action="index.php" method="POST" class="flex justify-center">
                <input type="text" name="task" placeholder="Apa yang akan kamu lakukan" class="text-xl text-white font-semibold placeholder-gray-400 py-2 px-5 bg-gray-600 rounded-l-full w-full focus:outline-none hover:bg-gray-700 hover:placeholder-white">
                <button type="submit" name="submit" class="text-xl text-black  py-2 pr-5 pl-4 bg-gray-400 rounded-r-full hover:bg-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:animate-spin animate-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4">
                    </svg>
                </button>
            </form>
        </div>


        <div class="bg-gray-900 mt-5 p-5 rounded-xl">

            <div class="font-bold text-xl italic block mb-3 hover:cursor-default text-center">List</div>

            <div class="max-h-80 overflow-y-auto">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th class="text-center px-1 py-2 bg-gray-800 text-gray-300 font-bold rounded-tl-xl w-1/12 hover:cursor-default ">No.</th>
                            <th class="text-left px-1 py-2 bg-gray-800 text-gray-300 font-bold hover:cursor-default w-3/4">Tugas</th>
                            <th class="text-center px-2 py-2 bg-gray-800 text-gray-300 font-bold rounded-tr-xl w-1/12 hover:cursor-default">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
                        <tr class="odd:bg-gray-700 odd:text-white even:bg-gray-600 even:text-neutral-100">
                            <td class="text-center px-1 py-2 font-bold border-r "><?= "$i."; ?></td>
                            <td class=" py-2 px-4 font-bold"><?= $row['task'] ?></td>
                            <td class="text-center px-1 py-2  font-bold flex justify-center border-l">
                                <button class="text-white font-bold hover:animate-pulse" type="submit" style="" id="btn-del">
                                    <a href="index.php?del_task=<?= $row['id']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </svg>
                                    </a>
                                </button>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
            </div>  
        </div>
    </div>

</div>
</body>
</html>