<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/booked.css">
    <!--emoji link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Booked Futsal</title>
</head>
<body> 


    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="Admin.html">
                    <i class="fas fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user.html">
                    <i class="fas fa-user"></i>
                    <span>user</span>
                </a>
            </li>
            <li>
                <a href="futsal.html">
                    <i class="fas fa-football"></i>
                    <span>Futsal</span>
                </a>
            </li>
            <li>
                <a href="AddFutsal.html">
                    <i class="fas fa-add"></i>
                    <span>Add Futsal</span>
                </a>
            </li>
            <li>
                <a href="booked.html">
                    <i class="fas fa-check"></i>
                    <span>Booked Futsal</span>
                </a>
            </li>
            <li>
                <a href="UpdateFutsal.html">
                    <i class="fas fa-pen-to-square"></i>
                    <span>Update Futsal</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    </div> 
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Booked</h2>
            </div>
            <div class="user--info">
                <div class="searh--box">
                <i class="fa-solid fa-search"></i>
                <input type="text"placeholder="search">
            </div>
            <img src="/image/om2.jpg" alt="">
        </div>
    </div>
    <div class="tabular-wrapper">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Futsal Name</th>
                        <th>Detail Time/Date</th>
                        <th>Perhour</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Joshna Gurung</td>
                            <td>sankhamul Futsal</td>
                            <td>2024-03-28</td>
                            <td>2 hour</td>
                            <td><button>Edits</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            
                        </tr>
                    </tfoot>
                </thead>
            </table>
        </div>

    </div>
</body>
</html>