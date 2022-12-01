<?php 
$conn = mysqli_connect('localhost','root','','todos');
$errors = "";

if (isset($_POST['submit'])) {
    $b = $_POST['b'];
    if (empty($b)) {
        $errors = "Bang isi bang";
    } else {
        mysqli_query($conn, "INSERT INTO `todo`(`b`) VALUES ('$b')");
        header('location: index.php');
    }
}

if(isset($_GET['dt'])) {
    $dt = $_GET['dt'];
    mysqli_query($conn, "DELETE FROM todo WHERE a=$dt");
    header('location: index.php');
}

$b = mysqli_query($conn, "SELECT * FROM todo");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>

</style>
<body class="dark:bg-[#1b1b3a] ">
    <div class="dark:text-[#58586f] font-bold text-center mb-5">To-Do List</div>
    <div class="text-3xl text-white font-bold text-center mb-5">Hello</div>
    <form action="index.php" method="post" class="flex  w-screen mb-5">
        <input type="text" name="b" id="todo" autocomplete="off" placeholder="What would you do?" class=" outline-none pl-4 border-white border-2 w-full rounded-full text-lg font-bold bg-[#1b1b3a] mb-5 h-10 text-white">
        <button type="submit" name="submit" class="dark:text-white px-5 font-bold rounded-full bg-[#715aff] h-10">Add</button>
    </form>
    <?php if (isset($errors)) { ?>
            <p class="text-red-600 text-center font-bold p-3"><?= $errors; ?></p>
    <?php } ?>
    

    <?php $result = mysqli_query($conn, "SELECT * FROM todo ");
        $rows = mysqli_num_rows($result); 
        ?>
    
    <?php if ($rows <= 0) { ?>
        <div class="text-center font-bold text-white text-2xl">Kosong</div>
    <?php } ?>

    <?php ?>

    <?php while ($ts = mysqli_fetch_array($b)) { ?>
    <div class="flex justify-between mx-5 bg-gradient-to-r from-[#725bff] to-[#9b85ff] p-4 rounded-full mb-4">
        <div class="text-xl font-bold text-[#cabfff]"><?= $ts['b'] ?></div>
        <div class="right-0 text-xl font-bold "><a href="index.php?dt=<?= $ts['a']; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a></div>
    </div>
    <?php } ?>
</body>
</html>