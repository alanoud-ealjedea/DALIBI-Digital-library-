<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
require_once('header.php');
include_once("../backend/db.php");

$records = mysqli_query($con,"select * from categories");
?>
<link rel="stylesheet" href="css/style.css">

<style>
    .main-table-containter{
    border-radius:3vmin;
    background-color:#F6F6F4;
    width:100%;
    
        padding: 1rem 1rem;
    box-shadow: 0px 2px 5px 0px #00000033;
    }

    .title-table-container{
    display:flex;
    justify-content:space-between;
    margin-bottom:1.20rem;
    align-items:center;
    padding:0rem 1.5rem;

    }

    .subtitle{
    font-weight:600;
    
    }

    .select-button{
    padding:0.45rem 1rem;
    padding-right:1.5rem;
    position:relative;
    border-radius:0.5rem;
    border:2px solid lightgrey;
    font-weight:600;
    border:none;
    box-shadow: 0px 1px 2px 0px #0000003b, -1px 0px 2px 0px   #ffffff33;
    }

    .select-button:after{
    content:' ';
    position:absolute;
    height:0.7vmin;
    width:0.7vmin;
    border:1px solid black;
    border-bottom:none;
    border-left:none;
    right:10%;
    top:30%;
    transform:rotate(134deg);
    
    }

    .dot{
    height:15px;
    width:15px;
    }

    table{
    width:100%;
    font-weight:600;
    FONT-SIZE:11PX;
    BORDER-COLLAPSE:COLLAPSE;
    color:#474747;
    }

    tr{
    transition:background-color 0.2s;

    }
    tr:hover{
    background-color:#FFFFFD;
    
    }
    td{
    padding:1rem;
    border:none;
    }

    td{
    text-align:center;
    }
    td:first-child{
    border-radius: 1.5rem 0rem 0rem 1.5rem;
    text-align:left;

    }

    td:last-child{
    border-radius: 0rem 1.5rem 1.5rem 0rem;


    }

    .icono-texto{
    display:flex;
    ALIGN-ITEMS:CENTER;
    }

    .icono-texto>div{
    margin-left:10px;
    }
    .contenedor-svg{
        BACKGROUND-COLOR:#E090C9;
    BORDER-RADIUS:0.7REM;
        PADDING:10PX;
    }

    .pendiente{
    background-color:#37517e;
    COLOR:#fff;
    PADDING:0.5REM;
    BORDER-RADIUS:0.5REM;
    font-weight: bolder;
    border: none;
    }

    .completado{
        background-color:#E6ECE9;
    COLOR:#80ABA4;
    PADDING:0.5REM;
    BORDER-RADIUS:0.5REM;
    }

    .cancelado{
        background-color:#F3DEDC;
    COLOR:#CF5858;
    PADDING:0.5REM;
    BORDER-RADIUS:0.5REM;
    }

    .otro-dolar{
    background-color:#B3AFEC;
    }

    @media (max-width:750px){
    td:nth-child(2){
        display:none;
    }
    
    td:nth-child(3){
        display:none;
    }
    }
</style>

<style>
  .fixed-top{
    background-color: #37517e!important;
  }
  .cards{
    margin-top: 10%;
    margin-bottom: 5%;
  }
</style>

<div class="container cards">
    <h1 class="text-center">Categories Info</h1>
    <hr>
	<!--Start table-->
    <div class='main-table-containter'>
        <div class='title-table-container'>
            <div class='subtitle'>Categories</div>
        </div>
        <div>
            <table>
            <tbody>
                <tr style="font-weight:bolder">
                    <td><div>Categorie Name</div></td>
                    <td>Actions</td>
                </tr>
                <?php
                    while($data = mysqli_fetch_array($records))
                    {
                ?>
                <tr>
                    <td><div><?= $data['category'] ?></div></td>
                    <td>
                        <form action="../backend/add_category.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <button class='pendiente' type="submit" name="delete_category">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
            </table>
        </div>
    </div>

    <!--End Table-->
</div>

<?php
require_once('footer.php');
?>
