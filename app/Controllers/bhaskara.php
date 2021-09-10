<?php

namespace App\Controllers;

use App\Models;


class Bhaskara extends BaseController
{
    public function index()
    {
		//index
		echo view('home');
		

		//LISTAR
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$todos = $bhasModel->findAll();
		$data['tabela'] = $todos;

		echo view('bhaskara_view', $data);

		echo view('update');

		echo view('Delete');


		
    }

	public function frmInserir($a = FALSE, $b = FALSE, $c = FALSE, $delta = 0000, $id = FALSE)
	{	
		$id = $this->request->getPost()['ID'];
		$a = $this->request->getPost()['A'];
		$b = $this->request->getPost()['B'];
		$c = $this->request->getPost()['C'];

		$Delta = ($b *$b) - (4 * $a * $c);
		$x1= (- $b + sqrt($Delta)) / (2 * $a);
		$x2= (- $b - sqrt($Delta)) / (2 * $a);

		$bhasModel = new \App\Models\BhaskaraModel();

		$data = [
		'A' => $a,
		'B' => $b,
		'C' => $c,
		'DELTA' => $Delta,
		'X1' => $x1,
		'X2' => $x2
		];

		if($id != FALSE) { 
		$data['ID'] = $id;
		}

		$result = $bhasModel->save($data);
		var_dump($result);
	}

	
	public function ler()
	{
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$todos = $bhasModel->findAll();
		$data['tabela'] = $todos;

		echo view('bhaskara_view', $data);

		
	}
	
	public function excluir($id = FALSE)
	{
		$id = $this->request->getPost()['ID'];

		$bhasModel = new \App\Models\BhaskaraModel();
		
		$result = $bhasModel->delete($id);
		
		var_dump($result);
		
	}
	
	
	
}