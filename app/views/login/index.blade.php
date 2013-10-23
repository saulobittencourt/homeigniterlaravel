@extends('templates.default')

@section('conteudo')
<section id="content" class="m-t-lg wrapper-md animated fadeInDown" style="margin-top:100px"> 
    <div class="nav-brand">
        {{HTML::image('assets/images/home_igniter.png','Home Igniter',array('style'=>'width:200px'))}}  
    </div> 
    <div class="row m-n"> 
        <div class="col-md-4 col-md-offset-4 m-t-lg"> 
            <section class="panel" style="padding:8px">
                @if(Session::has('flash_notice'))
                    <div id="flash_notice" class="alert alert-success"> 
                        <button type="button" class="close" data-dismiss="alert">
                           <i class="icon-remove"></i>
                        </button> 
                        <p>{{Session::get('flash_notice')}}</p> 
                    </div>
                @endif  
  
                @if(Session::has('flash_error'))
                  <div id="flash_error" class="alert alert-danger"> 
                      <button type="button" class="close" data-dismiss="alert">
                         <i class="icon-remove"></i>
                      </button> 
                      <p>{{Session::get('flash_error')}}</p> 
                  </div>
                @endif            
                <!-- Se der erro mostrar alert -->
                {{Form::open(array('rout' => 'userPost'))}}
                    <div class="form-group"> 
                        <label class="control-label">
                            E-mail
                        </label> 
                        <input REQUIRED type="email" id="email" name="email" placeholder="test@example.com" class="form-control"> 
                    </div> 
                    <div class="form-group"> 
                        <label class="control-label">Senha</label> 
                        <input REQUIRED type="password" id="password" name="password" placeholder="" class="form-control"> 
                    </div> 
                    <a href="#" class="pull-right m-t-xs">
                        <small>
                            Esqueceu a senha?
                        </small>
                    </a> 
                    <button type="submit" class="btn btn-default">
                        Acessar
                    </button> 
                {{Form::close()}}
                <div class="line line-dashed"></div> 
                <p>Acessar utizando:</p>
                <a href="#" class="btn btn-rounded btn-facebook btn-icon">
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" class="btn btn-rounded btn-twitter btn-icon">
                    <i class="icon-twitter"></i>
                </a>
                <a href="#" class="btn btn-rounded btn-gplus btn-icon">
                    <i class="icon-google-plus"></i>
                </a>
        </section> 
        </div> 
    </div> 
</section>
@stop

@section('style')
<style type="text/css">
    body{
        background-color: #FFFFFF;
    }
</style>
@stop