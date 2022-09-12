<?php
defined('BASEPATH') or exit('No direct script access allowed');

$data = $this->session->userdata();

if(!isset($data['admin_email']))
    redirect('admin/');

?>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
        <a class="navbar-brand text-left" href="#">Hello, Admin</a>
            <div class="container-fluid">
           
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
               
            </div>
        </nav>

