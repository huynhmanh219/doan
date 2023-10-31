<?php
$level = "../../";
$id = $_GET['sid'];
include($level."DB/db.php");

$edit_product = "SELECT * from product where id = '$id'";


$result = $db->prepare($edit_product);
$result -> execute();

$edit = $result->fetch(PDO::FETCH_ASSOC);

?>
<style>
        .row{
            margin-left:60px;
        }
        .rowTable{
            margin:10px 0;
        }
    </style>
<div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Edit Product </h3>
                </div>
                <div class="">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                               <?php include('form_search_product_pre')?>
                                
                            </div>
                        </div>
                    </div>
                </div>    
            </div>