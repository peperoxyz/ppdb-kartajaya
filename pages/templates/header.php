<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- DataTables CSS -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

     <!-- <script src="https://cdn.tailwindcss.com"></script> -->


    <title>Pendaftaran Siswa</title>
</head>
<style>
        /* Custom CSS untuk tata letak rata tengah */
        body, html {
            height: 100%;
            font-family: "Poppins", sans-serif;
        }
        .header-logo {
            width: 5rem;
        }
        .hero-logo{
            width: 15rem;
        }
        .max-width-5xl {
            max-width: 80rem;
        }
        .nav-link > a {
            color:black;
        }
        .nav-link > a:hover {
            color: gray;
        }
        .register-logo{
            width: 9rem;
        }
        .registration-form{
            max-width: 30rem;
        }
        #button-register:hover{
            background-color: black;
            color:white;
            transition: 0.3s;
        }
        #button-list:hover{
            background-color: black;
            color:white;
            transition: 0.3s;
        }
        /* Add the styling for the active button */
        .btn.active {
            background-color: black;
            color: #fff;
        }
    </style>
<body class="relative ">
    <!-- Hero Section (Centered content) -->
    <header class="navbar navbar-light bg-none  py-4 justify-content-between  mx-4">
        <div class="logo">
            <a href="../pages/index.php"><img class="header-logo" src="../assets/images/logo.png" alt=""> </a>
        </div>
        <div class="d-flex gap-3 font-weight-bold nav-link">
            <a id="button-register" href="../pages/student-register.php" class="text-decoration-none btn">Pendaftaran Siswa</a>
            <a id="button-list" href="../pages/student-list.php" class="text-decoration-none btn">List Siswa Terdaftar</a>
        </div>
        
    </header>