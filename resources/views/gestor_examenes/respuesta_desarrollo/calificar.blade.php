  @extends('app')

@section('htmlheader_title')
   CURSOS
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">GESTOR PLANILLA</div>
                  <div class="panel-body">

    <div class="container">
    <div class="row">
   
    {{-- */$materia=DB::table('cursos')->where('id', $id_curso)->first();
                    $name_materia=$materia->nombre;
                   
             /* --}}
    <h3> Planilla <a href="#"></a></h2>
    <h4> Materia: {{ $name_materia }} <a href="#"></a></h4>
  
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                
            

                <tr bgcolor="#81BEF7">
                    <th>S.No</th><th> Preguntas/Respuestas </th><th>Calificacion</th>
                </tr>
            </thead>
            <tbody>


               {!! Form::open(['url' => '/gestor_examenes/respuesta_desarrollo/insertar/nota', 'class' => 'form-horizontal']) !!}

            {{-- */$x=0;$i=0;/* --}}
            @foreach($respuesta_desarrollos as $item)
                {{-- */$x++;
                 
                /* --}}



                <tr bgcolor= "#81F7F3">
                    <td bgcolor= "#81F7F3">{{ $x }}</td>
                    <td bgcolor= "#81F7F3">{{ $item->nombre_pregunta }}</td>
                    <td bgcolor= "#81F7F3"> Puntaje de la pregunta: {{ $item->puntaje_pregunta }}</td>
                </tr>

                <tr bgcolor= "#CEECF5">
                    <td> Resp. {{ $x }}</td>
                    <td>{{ $item->respuesta }}</td>
                    <td>                     
                 
   


               <div class="form-group {{ $errors->has('ids') ? 'has-error' : ''}}">                
                <div class="col-sm-6">
                    {!! Form::hidden('' . $item->id_resp, $item->id_resp, ['class' => 'form-control']) !!}
                    {!! $errors->first('' . $item->id_resp, '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        {{-- */  $formulario_ids[$i]='' . $item->id_resp; /* --}}


            <div class="form-group {{ $errors->has('calificaciones') ? 'has-error' : ''}}">                
                <div class="col-sm-6">
                    {!! Form::number('calificacion' . $item->id_resp , null, ['class' => 'form-control']) !!}
                    {!! $errors->first('calificacion . $item->id_resp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        {{-- */  $formulario_calificaciones[$i]='calificacion' . $item->id_resp; /* --}}




                  </td>

               </tr>
                {{-- */$i++;/* --}}
                @endforeach
                 {{-- */ 
                  $calificaciones_resp=implode(",",$formulario_calificaciones);
                  $calificaciones_ids=implode(",",$formulario_ids);
                /* --}}

                 <div class="form-group {{ $errors->has('calificaciones_ins') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('calificaciones_ins',$calificaciones_resp, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('calificaciones_ins', '<p class="help-block">:message</p>') !!}
                </div>
           </div>

            <div class="form-group {{ $errors->has('calificaciones_ids') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('calificaciones_ids',$calificaciones_ids, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('calificaciones_ids', '<p class="help-block">:message</p>') !!}
                </div>
           </div>



             <div class="form-group {{ $errors->has('id_curso') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_curso',$id_curso, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_curso', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                             <div class="form-group {{ $errors->has('id_user') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_user',$id_user, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_user', '<p class="help-block">:message</p>') !!}
                </div>
                </div>

                             <div class="form-group {{ $errors->has('id_examen') ? 'has-error' : ''}}">
                
                <div class="col-sm-6">
                    {!! Form::hidden('id_examen',$id_examen, ['class' => 'form-control' , 'required' => 'required']) !!}
                    {!! $errors->first('id_examen', '<p class="help-block">:message</p>') !!}
                </div>
                </div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualizar',['class' => 'btn btn-primary form-control']) !!}
            <br/> <br/>
            <br/> <br/>
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif




            </tbody>

        </table>
        <!--center>
         <div>
          <a href="" class="btn btn-primary btn-xs" title="Terminar" ><span class="" aria-hidden="true"/> <h5> Terminar </h5></a>
          </div>
          </center-->
        <div class="pagination">  </div>
    </div>

</div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection

