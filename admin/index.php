<?php
    if (isset($_POST['acederadminarea'])) {
        $userrule = $_POST['rule'];
        if ($userrule != 2) {
            header("location: ../");
        }
    } else {
        header("location: ../");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <!-- Icons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>YmrAdmin | AsmrProg</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <img src="../images/LOGO.png" alt="YMR Logo">
        </a>
        <ul class="side-menu">
            <li class="active"><a href="#"><i class="fa-solid fa-chart-simple"></i><p>Analytics</p></a></li>
            <li><a href="#"><i class="fa-solid fa-eye"></i><p>Visão Do Site</p></a></li>
            <li><a href="#"><i class="fa-regular fa-message"></i><p>Mensagens</p></a></li>
            <li><a href="#"><i class="fa-solid fa-bag-shopping"></i><p>Encomendas</p></a></li>
            <li><a href="#"><i class="fa-solid fa-database"></i><p>Gestão de Stock</p></a></li>
            <li><a href="#"><i class="fa-solid fa-users"></i><p>Usuários</p></a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i><p>Configurações</p></a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="images/user.png">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <section class="main-section" id="analytics">
                <div class="header">
                    <div class="left">
                        <h1>Analytics</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">
                                    YmrAdmin
                                </a></li>
                            /
                            <li><a href="#" class="active">Analytics</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Insights -->
                <ul class="insights">
                    <li>
                        <i class='bx bx-calendar-check'></i>
                        <span class="info">
                            <h3>
                                1,074
                            </h3>
                            <p>Encomendas Pagas</p>
                        </span>
                    </li>
                    <li><i class='bx bx-show-alt'></i>
                        <span class="info">
                            <h3>
                                3,944
                            </h3>
                            <p>Visitas</p>
                        </span>
                    </li>
                    <li><i class='bx bx-line-chart'></i>
                        <span class="info">
                            <h3>
                                14,721
                            </h3>
                            <p>Buscas</p>
                        </span>
                    </li>
                    <li><i class='bx bx-dollar-circle'></i>
                        <span class="info">
                            <h3>
                                $6,742
                            </h3>
                            <p>Total de vendas</p>
                        </span>
                    </li>
                </ul>
                <!-- End of Insights -->

                <div class="bottom-data">
                    <div class="orders">
                        <div class="header">
                            <i class='bx bx-receipt'></i>
                            <h3>Recent Orders</h3>
                            <i class='bx bx-filter'></i>
                            <i class='bx bx-search'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="images/user.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status completed">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/user.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="images/user.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status process">Processing</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Reminders -->
                    <div class="reminders">
                        <div class="header">
                            <i class='bx bx-note'></i>
                            <h3>Remiders</h3>
                            <i class='bx bx-filter'></i>
                            <i class='bx bx-plus'></i>
                        </div>
                        <ul class="task-list">
                            <li class="completed">
                                <div class="task-title">
                                    <i class='bx bx-check-circle'></i>
                                    <p>Start Our Meeting</p>
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="completed">
                                <div class="task-title">
                                    <i class='bx bx-check-circle'></i>
                                    <p>Analyse Our Site</p>
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                            <li class="not-completed">
                                <div class="task-title">
                                    <i class='bx bx-x-circle'></i>
                                    <p>Play Footbal</p>
                                </div>
                                <i class='bx bx-dots-vertical-rounded'></i>
                            </li>
                        </ul>
                    </div>

                    <!-- End of Reminders-->

                </div>
            </section>

            <section class="main-section" id="overview">
                <div class="header">
                    <div class="left">
                        <h1>Visão Do Site</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">
                                    YmrAdmin
                                </a></li>
                            /
                            <li><a href="#" class="active">Visão Do Site</a></li>
                        </ul>
                    </div>
                </div>
                <div class="overview-hero">
                    <h2>Informações da secção Hero</h2>
                    <?php include('assets/hero-form.php'); ?>
                </div>
            </section>

            <section class="main-section" id="message">
                <div class="header">
                    <div class="left">
                        <h1>Mensagens</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">
                                    YmrAdmin
                                </a></li>
                            /
                            <li><a href="#" class="active">Mensagens</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-table">
                    <div class="header">
                        <div class="header-table-left">
                            <i class='bx bx-receipt'></i>
                            <h3>Mensagens</h3>
                        </div>
                        <div class="header-table-right">
                            <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                        </div>
                        
                    </div>
                    <?php
                        include("assets/messages.php");
                    ?>
                </div>
            </section>

            <section class="main-section" id="orders">
                <div class="header">
                    <div class="left">
                        <h1>Encomendas</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">
                                    YmrAdmin
                                </a></li>
                            /
                            <li><a href="#" class="active">Encomendas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-table">
                    <div class="header">
                        <div class="header-table-left">
                            <i class='bx bx-receipt'></i>
                            <h3>Recent Orders</h3>
                        </div>
                        <div class="header-table-right">
                            <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                        </div>
                        
                    </div>
                    <table class="tabela">
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Data de encomenda</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="img-perfil">
                                        <img src="images/user.png">
                                        <p>John Doe</p>
                                    </div>
                                </td>
                                <td>Silver tape</td>
                                <td>5.500 kz</td>
                                <td>10 unidade(s)</td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Sucesso</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-perfil">
                                        <img src="images/user.png">
                                        <p>John Doe</p>
                                    </div>
                                </td>
                                <td>Multimetro</td>
                                <td>12.500 kz</td>
                                <td>3 unidade(s)</td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pendente</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-perfil">
                                        <img src="images/user.png">
                                        <p>John Doe</p>
                                    </div>
                                </td>
                                <td>Silver tape</td>
                                <td>5.500 kz</td>
                                <td>10 unidade(s)</td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Cancelada</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <?php include('assets/stock-list.php'); ?>

            <section class="main-section" id="users">
                <div class="header">
                    <div class="left">
                        <h1>Usuários</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">
                                    YmrAdmin
                                </a></li>
                            /
                            <li><a href="#" class="active">Usuários</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-table">
                    <div class="header">
                        <div class="header-table-left">
                            <i class='bx bx-receipt'></i>
                            <h3>Usuários</h3>
                        </div>
                        <div class="header-table-right">
                            <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                        </div>
                        
                    </div>
                    <?php
                        include("assets/users.php");
                    ?>
                </div>
            </section>

            <section class="main-section" id="settings">
                <div class="header">
                    <div class="left">
                        <h1>Configurações do Site</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">
                                    YmrAdmin
                                </a></li>
                            /
                            <li><a href="#" class="active">Configurações</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>

    </div>

    <script src="js/index.js"></script>
</body>

</html>