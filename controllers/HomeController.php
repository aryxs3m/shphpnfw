<?php


namespace qphp\controllers;

use qphp\system\Request;
use qphp\system\View;

class HomeController
{
    public function index()
    {
        return View::render('index.twig', ['controller' => 'HomeController']);
    }

    public function form()
    {
        $request = new Request();

        $form = db()->table('form');
        $form->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ])->execute();

        return View::render('formdata.twig', [
            'data' => $request->all()
        ]);
    }
}