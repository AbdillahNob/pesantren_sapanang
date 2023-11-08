<?php
require 'template/sidebar_desktop.php';
require 'template/header_desktop.php';
require 'template/sidebar_mobile.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i>User data
                </h3>
                
                <div class="filters m-b-45">
                    <div class="table-data__tool-right">
                        <a href="tambah_user.php">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>Tambah User
                            </button>
                        </a>
                    </div>
                </div>

                <div class="table-responsive text-nowrap ">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Role</td>
                                <td>Username</td>
                                <td>Password</td>
                                <td>Gambar</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                    
                                <td>
                                    <div class="table-data__info">
                                        <h6>lori lynch</h6>
                                        <span>
                                            <a href="#">johndoe@gmail.com</a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="role admin">admin</span>
                                </td>
        
                                <td>
                                    <span class="more">
                                        <i class="zmdi zmdi-more"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                     
                                <td>
                                    <div class="table-data__info">
                                        <h6>lori lynch</h6>
                                        <span>
                                            <a href="#">johndoe@gmail.com</a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="role user">user</span>
                                </td>
              
                                <td>
                                    <span class="more">
                                        <i class="zmdi zmdi-more"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                   
                                <td>
                                    <div class="table-data__info">
                                        <h6>lori lynch</h6>
                                        <span>
                                            <a href="#">johndoe@gmail.com</a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="role user">user</span>
                                </td>
                  
                                <td>
                                    <span class="more">
                                        <i class="zmdi zmdi-more"></i>
                                    </span>
                                </td>
                            </tr>
              
                        </tbody>
                    </table>
                </div>
        
            </div>
            <!-- END USER DATA-->



            <?php
            require 'template/footer.php';
            ?>