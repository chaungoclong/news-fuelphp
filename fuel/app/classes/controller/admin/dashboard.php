<?php

class Controller_Admin_Dashboard extends Controller
{
    public function action_index()
    {
        if (!Auth::check()) {
            Response::redirect('login');
        }

        return View::forge('dashboard');
    }
}

