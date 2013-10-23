@extends('templates.default')

@section('conteudo')


<section id="task_description" class="m-t-lg wrapper-md animated fadeInDown">
    {{ Form::open( array("action" => "TaskController@postAdd") ) }}
        <textarea id="titulo" class="form-control input-lg no-border" rows="5" placeholder="Descreva a tarefa...">                                        
        </textarea> 
        <button id="post_task" class="btn btn-default pull-right">
            POST
        </button>
    {{ Form::close() }}
    <footer class="panel-footer bg-light lter">
        <ul class="nav nav-pills">
            <li>
                <a href="#"><i class="icon-location-arrow"></i></a>
            </li>
            <li>
                <a href="#"><i class="icon-camera"></i></a>
            </li>
            <li>
                <a href="#"><i class="icon-facetime-video"></i></a>
            </li>
            <li>
                <a href="#"><i class="icon-microphone"></i></a>
            </li>
        </ul>
    </footer>
</section>
@stop

@section('style')
    <style type="text/css">
        #task_description{
            margin-top: 500px;
            width: 50%;
            margin-left: 300px;
        }
        #post_task{
            margin-top: 12px;
            margin-right: 12px;
        }
    </style>
@stop