<?php
session_start();
include "../config/config.php";

if (!empty($_GET['act'])) {
    include "../action/header.php";
}else {
    if (empty($_SESSION['username']) && empty($_SESSION['id_user'])) {
        include "../web/header.php";
    }else {
        include "../users/header.php";
    }
}

if (!empty($_GET['page'])) { 
    $page_url = $_GET['page'];
  if ($page_url == 'dashboard') {
    if (empty($_SESSION['username']) && empty($_SESSION['id_user'])) {
        redirect('?page=login');   
    }else {
        echo "<title>Dashboard</title>";
        include "../users/dashboard.php";
    }
  }
  else 
       if ($page_url == 'login'){
    if (empty($_SESSION['username']) && empty($_SESSION['id_user'])) {
        include "../web/index.php";    
    }else {
        redirect('?page=dashboard');      
        }
      }
      else
      if ($page_url == 'logout') {
       include "../logout.php"; 
      }else {
        redirect('?page=login');
      }          
    }else {
        
        if(!empty($_GET['act'])) {
            $act_url = $_GET['act'];
            if ($act_url == 'login') {
                include "../action/login.php";
            }else {
                redirect('?page=404');
            }
         }
     }
        
    
    if (!empty($_GET['act'])) {
        include "../action/footer.php";
    }else {
        if (empty($_SESSION['username']) && empty($_SESSION['id_user'])) {
            include "../web/footer.php";
        }else {
            include "../users/footer.php";
        }
    }


?>