<?php
 
class TaskController extends BaseController {
    
    public function getAdd() {
        return View::make('tasks/add_task');
    }

    public function postAdd() {
    	$regras  = array('titulo' => 'required');
    	$validacao = Validator::make(Input::all(),$regras);

    	if ($validacao->fails())
    	{
    		return Redirect::to('task/add')->withErrors($validacao);
    	}
    	else
    	{
    		$task = new Task;
    		$task->titulo = Input::get('titulo');
    		$task->status = 1;
    		$task->save();

    		return View::make('tasks/add_task')->with('sucesso',TRUE);
    	}
    }

    public function listar() {
    	return View::make('tasks/list_tasks')->with('tasks', Task::all());
	}

	public function check() {
        //verifica se a request é ajax
        if (Request::ajax()) {
            //criando regras de validação
            $regras = array('task_id' => 'required|integer');

            $validacao = Validator::make(Input::all(), $regras);

            if ($validacao->fails()) {
                return Response::json( array("status" => FALSE) );
            }
            else {
                //tenta encontrar e atualizar a task
                try {
                    $task = Task::findOrFail(Input::get('task_id'));
                    $task->status = TRUE;
                    $task->save();

                    return Response::json( array("status" => TRUE, "titulo" => $task->titulo) );
                }
                //caso não tenha conseguido encontrar a task
                catch(Exception $e) {
                    return Response::json( array("status" => FALSE, "mensagem" => $e->getMessage()) );
                }
            }
        }
    }
}