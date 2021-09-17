<?php

namespace App\Controllers;

use App\Models;


class Bhaskara extends BaseController
{

	public function frmInserir()
	{		
		if(isset($this->request->getPost()['ID'])) {
            $id = $this->request->getPost()['ID'];
        } else {
            $id = FALSE;
        }

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
		echo view('home');
        $bhasModel = new \App\Models\BhaskaraModel();
        $todos = $bhasModel->findAll();

        foreach ($todos as $key => $linha) {
            $todos[$key]['excluir'] = '<a href="excluir/' . $linha['ID'] . '"> DELETAR </a>' ;
        }

		foreach ($todos as $key => $linha) {
            $todos[$key]['editar'] = '<a href="edit/' . $linha['ID'] . '"> EDITAR </a>' ;
        }
        $data['tabela'] = $todos;
        echo view('bhaskara_view', $data);

    }

	public function edit($id)
	{
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$todos = $bhasModel->find($id);
		$data['olhar'] = $todos;
		echo view ('update', $data);
		
	}
	
	public function excluir($id)
	{
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$result = $bhasModel->delete($id);
		
		var_dump($result);
		
	}
	
	
	
}
