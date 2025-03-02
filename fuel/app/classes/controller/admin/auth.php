<?php

class Controller_Admin_Auth extends Controller
{
    public function action_login()
    {
        // already logged in?
        if (\Auth::check()) {
            // yes, so go back to the page the user came from, or the
            // application dashboard if no previous page can be detected
            \Session::set_flash('info', 'You are already logged in.');
            \Response::redirect_back('admin');
        }

        // was the login form posted?
        if (\Input::method() == 'POST') {
            // check the credentials.
            if (\Auth::instance()->login(\Input::param('email'), \Input::param('password'))) {
                // did the user want to be remembered?
                if (\Input::param('remember', false)) {
                    // create the remember-me cookie
                    \Auth::remember_me();
                } else {
                    // delete the remember-me cookie if present
                    \Auth::dont_remember_me();
                }

                // logged in, go back to the page the user came from, or the
                // application dashboard if no previous page can be detected
                \Response::redirect_back('admin');
            } else {
                // login failed, show an error message
                \Session::set_flash('error', 'Login failed.');
            }
        }

        // display the login page
        return \View::forge('login');
    }

    public function post_logout()
    {
        // remove the remember-me cookie, we logged-out on purpose
        \Auth::dont_remember_me();

        // logout
        \Auth::logout();

        // inform the user the logout was successful
        \Session::set_flash('success', 'Logged out.');

        // and go back to where you came from (or the application
        // homepage if no previous page can be determined)
        \Response::redirect_back();
    }
}