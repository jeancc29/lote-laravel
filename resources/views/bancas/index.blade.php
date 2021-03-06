@extends('header')

@section('content')



          
    


            <div class="main-panel" ng-init="load('{{ session('idUsuario')}}')">
              <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
	<div class="container-fluid">
    <div class="navbar-wrapper">

    </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
          <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
      </button>
	</div>
</nav>
<!-- End Navbar -->


              

                  <div class="content">
                      













<div class="container-fluid">
  
  <div class="col-md-12 col-12 mr-auto ml-auto">


   <!--      Wizard container        -->
    <div ng-show="datos.mostrarFormEditar" class="wizard-container">
    <div class="card card-wizard" data-color="blue" id="wizardProfile">
        <form novalidate>
          <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
          <div class="card-header">
            <div class="row">
            <div class="col-5">
              <button ng-click="datos.mostrarFormEditar = !datos.mostrarFormEditar" class="btn btn-just-icon btn-success btn-fab btn-round">
                    <i class="material-icons text_align-center">arrow_back</i>
              </button>
            </div>

             <div class="col-6">
              <h3 class="card-title">
                Bloqueos
              </h3>
            </div>
            </div>
           
          </div>
          <div class="wizard-navigation">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a ng-init="mostrarPagos = false" ng-click="mostrarPagos = false" class="nav-link" href="#about" data-toggle="tab" role="tab">
                  Datos
                </a>
              </li>
              <li class="nav-item">
                <a ng-click="mostrarPagos = true" class="nav-link" href="#account" data-toggle="tab" role="tab">
                  Config.
                </a>
              </li>

               <li class="nav-item">
                <a  ng-click="mostrarPagos = true" class="nav-link" href="#horarios" data-toggle="tab" role="tab">
                  Horarios
                </a>
              </li>

               <li class="nav-item">
                <a  ng-click="mostrarPagos = true" class="nav-link" href="#comisiones" data-toggle="tab" role="tab">
                  Comision
                </a>
              </li>

               <li class="nav-item">
                <a  ng-click="mostrarPagos = true" class="nav-link" href="#premios" data-toggle="tab" role="tab">
                  Premio
                </a>
              </li>

               <li class="nav-item">
                <a  ng-click="mostrarPagos = true" class="nav-link" href="#loterias" data-toggle="tab" role="tab">
                  Loterias
                </a>
              </li>
              
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="about">
                <!-- <h5 class="info-text"> Let's start with the basic information (with validation)</h5> -->
                <div class="row justify-content-center">
  
                  
                  <form novalidate>

                  <div class="col-12 col-sm-6">
                    <div class="input-group form-control-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <div class="form-group">
                        <label for="banca" class="bmd-label-floating">Banca</label>
                        <input ng-model="datos.descripcion" class="form-control" id="banca" name="banca">
                      </div>
                    </div>

                    <div class="input-group form-control-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">record_voice_over</i>
                        </span>
                      </div>
                      <div class="form-group">
                        <label for="codigo" class="bmd-label-floating">Codigo</label>
                        <input ng-model="datos.codigo" type="text" class="form-control" id="codigo" name="codigo">
                      </div>
                    </div>


                    <div class="input-group form-control-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <div class="form-group">
                        <select 
                            ng-model="datos.selectedUsuario"
                            ng-options="o.nombres for o in datos.optionsUsuarios"
                            class="selectpicker w-100" 
                            data-style="select-with-transition" 
                            title="Select Usuario">
                        <!-- <option value="Afghanistan"> Afghanistan </option>
                        <option value="Albania"> Albania </option>
                        <option value="Algeria"> Algeria </option>
                        <option value="American Samoa"> American Samoa </option>
                        <option value="Andorra"> Andorra </option>
                        <option value="Angola"> Angola </option>
                        <option value="Anguilla"> Anguilla </option>
                        <option value="Antarctica"> Antarctica </option> -->
                      </select>
                      </div>
                    </div>


                      <div class="input-group form-control-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">record_voice_over</i>
                        </span>
                      </div>
                      <div class="form-group">
                        <label for="dueno" class="bmd-label-floating">Dueno</label>
                        <input ng-model="datos.dueno" type="text" class="form-control" id="codigo" name="dueno">
                      </div>
                    </div>

                    <div class="input-group form-control-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">record_voice_over</i>
                        </span>
                      </div>
                      <div class="form-group">
                        <label for="dueno" class="bmd-label-floating">Localidad</label>
                        <input ng-model="datos.localidad" type="text" class="form-control" id="codigo" name="localidad">
                      </div>
                    </div>


                    <div class="row">
                      
                      <div class="col-9">

                          <div class="input-group form-control-lg">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">record_voice_over</i>
                              </span>
                            </div>
                            <div class="form-group">
                              <label for="ip" class="bmd-label-floating">Ip</label>
                              <input ng-model="datos.ip" type="text" class="form-control" id="ip" name="ip">
                            </div>
                          </div>

                      </div>

                      <div class="col-3">
                        <div class="input-group form-control-lg">
                            <div class="form-group">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input ng-model="datos.estado" class="form-check-input" type="checkbox" value="" checked> Activa
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                      </div>

                    </div>





                      

                  </div> <!-- END DIV FORMULARIO -->



                  </form>
                 
                </div> <!-- END ROW PRINCIPAL -->
              </div> <!-- END TAB 1 -->
              <div class="tab-pane" id="account">
                <!-- <h5 class="info-text"> What are you doing? (checkboxes) </h5> -->
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="row justify-content-center">

                   
                    
                    
                   

                      <div class="col-12">
                        <form novalidate>

                        




                          <div class="row">

                            <div class="col-6">

                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                  </span>
                                </div>
                                <div class="form-group">
                                  <label for="porcentajecaid" class="bmd-label-floating">Porcentaje de caida</label>
                                  <input ng-model="datos.porcentajeCaida" class="form-control" id="porcentajecaid" name="porcentajecaid">
                                </div>
                              </div>

                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                  </span>
                                </div>
                                <div class="form-group">
                                  <label for="balanceDesactivacion" class="bmd-label-floating">Balance de desactivacion</label>
                                  <input ng-model="datos.balanceDesactivacion" type="text" class="form-control" id="balanceDesactivacion" name="balanceDesactivacion">
                                </div>
                              </div>


                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                  </span>
                                </div>
                                <div class="form-group">
                                  <label for="limiteVenta" class="bmd-label-floating">Limite de venta por dia</label>
                                  <input ng-model="datos.limiteVenta" type="text" class="form-control" id="limiteVenta" name="limiteVenta">
                                </div>
                              </div>


                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                  </span>
                                </div>
                                <div class="form-group">
                                  <label for="descontar" class="bmd-label-floating">Descontar</label>
                                  <input ng-model="datos.descontar" type="text" class="form-control" id="descontar" name="descontar">
                                </div>
                              </div>

                              
                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                  </span>
                                </div>
                                <div class="form-group">
                                  <label for="deCada" class="bmd-label-floating">De cada</label>
                                  <input ng-model="datos.deCada" type="text" class="form-control" id="deCada" name="deCada">
                                </div>
                              </div>


                              <div class="input-group form-control-lg">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">record_voice_over</i>
                                  </span>
                                </div>
                                <div class="form-group">
                                  <label for="minutosCancelarTicket" class="bmd-label-floating">Minutos para cancelar ticket</label>
                                  <input ng-model="datos.minutosCancelarTicket" type="text" class="form-control" id="minutosCancelarTicket" name="minutosCancelarTicket">
                                </div>
                              </div>

                            </div> <!-- END COL 6 -->
                            
                            <div class="col-6">

                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">record_voice_over</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="piepagina1" class="bmd-label-floating">1er pie de pagina</label>
                                    <input ng-model="datos.piepagina1" type="text" class="form-control" id="piepagina1" name="piepagina1">
                                  </div>
                                </div>

                                
                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">record_voice_over</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="piepagina2" class="bmd-label-floating">2do pie de pagina</label>
                                    <input ng-model="datos.piepagina2" type="text" class="form-control" id="piepagina2" name="piepagina2">
                                  </div>
                                </div>

                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">record_voice_over</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="piepagina3" class="bmd-label-floating">3er pie de pagina</label>
                                    <input ng-model="datos.piepagina3" type="text" class="form-control" id="piepagina3" name="piepagina3">
                                  </div>
                                </div>


                                <div class="input-group form-control-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">record_voice_over</i>
                                    </span>
                                  </div>
                                  <div class="form-group">
                                    <label for="piepagina4" class="bmd-label-floating">4to pie de pagina</label>
                                    <input ng-model="datos.piepagina4" type="text" class="form-control" id="piepagina4" name="piepagina4">
                                  </div>
                                </div>

                                

                            </div>

                          

                          </div>





                        </form>

                      </div> <!-- END DIV FORMULARIO -->


                      
                    </div> <!-- END ROW SECUNDARIO PRINCIPAL -->
                  </div> <!-- END COL PRINCIPAL -->
                </div> <!-- END ROW PRINCIPAL -->
              </div> <!-- END TAB 2 -->

              <div class="tab-pane" id="horarios">
                <!-- <h5 class="info-text"> What are you doing? (checkboxes) </h5> -->
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="row justify-content-center">

                   
                    
                    
                   

                      <div class="col-12">
                        <form novalidate>

                        




                          <div class="row justify-content-center">


                             <div class="col-8">
                              <div class="row mt-2">
                                <h4 class="font-weight-bold d-sm-block col-sm-2 text-right">Dias</h4>
                                <div class="col-sm-4">
                                <h4 class="font-weight-bold text-center">Apertura</h4>
                                </div>
                                <div class="col-sm-4 text-center">
                                  <h4 class="font-weight-bold">Cierre</h4>
                                </div>
                              </div>
                            </div>

                            <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Lunes</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.lunes.apertura" type="text"  name="lastname" id="lunesHoraApertura" type="text" class="form-control timepicker">
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.lunes.cierre" type="text"  name="lastname" id="lunesHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>

                          
                            <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Martes</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.martes.apertura" type="text"  name="lastname" id="martesHoraApertura" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.martes.cierre" type="text"  name="lastname" id="martesHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>

                             <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Miercoles</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.miercoles.apertura" type="text"  name="lastname" id="miercolesHoraApertura" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.miercoles.cierre" type="text"  name="lastname" id="miercolesHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>


                             <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Jueves</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.jueves.apertura" type="text"  name="lastname" id="juevesHoraApertura" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.jueves.cierre" type="text"  name="lastname" id="juevesHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>


                             <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Viernes</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.viernes.apertura" type="text"  name="lastname" id="viernesHoraApertura" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.viernes.cierre" type="text"  name="lastname" id="viernesHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Sabado</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.sabado.apertura" type="text"  name="lastname" id="sabadoHoraApertura" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.sabado.cierre" type="text"  name="lastname" id="sabadoHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>


                              <div class="col-8">
                              <div class="row mt-2">
                                <label class="d-none d-sm-block col-sm-2 col-form-label">Domingo</label>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.domingo.apertura" type="text"  name="lastname" id="domingoHoraApertura" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-group">
                                  <input ng-model="datos.domingo.cierre" type="text"  name="lastname" id="domingoHoraCierre" type="text" class="form-control timepicker" >
                                  </div>
                                </div>
                              </div>
                            </div>

                          

                          </div>





                        </form>

                      </div> <!-- END DIV FORMULARIO -->


                      
                    </div> <!-- END ROW SECUNDARIO PRINCIPAL -->
                  </div> <!-- END COL PRINCIPAL -->
                </div> <!-- END ROW PRINCIPAL -->
              </div> <!-- END TAB 3 -->
              
              <div class="tab-pane" id="comisiones">
                <div class="row justify-content-center">
                  <div class="col-12">

                  <div class="row">

                    
                  </div>
                  <style>
                    .btn-outline-info.active{
                      background-color: #00bcd4!important;
                      color: #fff!important;
                    }
                  </style>

                  <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                  <!-- track by $index -->
                    <label class="btn btn-outline-info" 
                      ng-repeat="l in datos.ckbLoterias track by l.id"
                      ng-if="l.existe"
                      ng-init="rbxLoteriasComisionesChanged(l, $first)"
                      ng-class="{'active': $first}"
                      ng-click="rbxLoteriasComisionesChanged(l)">
                      <input  type="radio" name="options" id="option@{{$index + 1}}" autocomplete="off" checked> @{{l.descripcion}}
                    </label>
                    <!-- <label class="btn btn-outline-info">
                      <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                    </label>
                    <label class="btn btn-outline-info">
                      <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                    </label> -->
                </div>
                    
                 
                   <!-- <div class="row" ng-repeat="s in datos.comisiones.selectedLoteria.sorteos">
                    <div class="col-8">
                        <div class="row mt-2">
                          <label class="d-none d-sm-block col-sm-2 col-form-label font-weight-bold mt-2" style="color: black;">@{{s.descripcion}}</label>
                          <div class="col-sm-5">
                            <div class="form-group">
                            <input ng-blur="comisionSorteo(monto, s.pivot.idLoteria, s.id)" ng-model="monto" type="text"  name="lastname" id="horaCierre" type="text" class="form-control timepicker" >
                            </div>
                          </div>
                        </div>
                      </div>
                   </div> END ROW -->

                   <div class="row" ng-if="existeSorteo('Directo')">
                    <div class="col-8">
                        <div class="row mt-2">
                          <label class="d-none d-sm-block text-right col-sm-3 col-form-label font-weight-bold mt-2" style="color: black;">Directo</label>
                          <div class="col-sm-5">
                            <div class="form-group">
                            <input ng-model="datos.ckbLoterias[datos.indexLoteriaComisiones].comisiones.directo" type="text"  name="directo" id="directo" type="text" class="form-control" >
                            </div>
                          </div>
                        </div>
                      </div> <!-- END COL-6 -->
                   </div> <!-- END ROW -->

                   <div class="row" ng-if="existeSorteo('Pale')">
                    <div class="col-8">
                        <div class="row mt-2">
                          <label class="d-none d-sm-block text-right col-sm-3 col-form-label font-weight-bold mt-2" style="color: black;">Pale</label>
                          <div class="col-sm-5">
                            <div class="form-group">
                            <input ng-model="datos.ckbLoterias[datos.indexLoteriaComisiones].comisiones.pale" type="text"  name="pale" id="pale" type="text" class="form-control" >
                            </div>
                          </div>
                        </div>
                      </div> <!-- END COL-6 -->
                   </div> <!-- END ROW -->

                   <div class="row" ng-if="existeSorteo('Tripleta')">
                    <div class="col-8">
                        <div class="row mt-2">
                          <label class="d-none d-sm-block text-right col-sm-3 col-form-label font-weight-bold mt-2" style="color: black;">Tripleta</label>
                          <div class="col-sm-5">
                            <div class="form-group">
                            <input ng-model="datos.ckbLoterias[datos.indexLoteriaComisiones].comisiones.tripleta" type="text"  name="tripleta" id="tripleta" type="text" class="form-control" >
                            </div>
                          </div>
                        </div>
                      </div> <!-- END COL-6 -->
                   </div> <!-- END ROW -->

                  </div> <!-- END COL 12 PRINCIPAL -->
                 
                </div>
              </div> <!-- END TAB -->

              <div class="tab-pane" id="premios">
                <div class="row justify-content-center">
                  <div class="col-12">

                  <div class="row">

                    
                  </div>
                  <style>
                    .btn-outline-info.active{
                      background-color: #00bcd4!important;
                      color: #fff!important;
                    }
                  </style>

                  <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                    <label class="btn btn-outline-info" 
                      ng-repeat="l in datos.ckbLoterias track by l.id"
                      ng-init="rbxLoteriasPagosCombinacionesChanged(l, $first)"
                      ng-class="{'active': $first}"
                      ng-if="l.existe"
                      ng-click="rbxLoteriasPagosCombinacionesChanged(l)">
                      <input  type="radio" name="options" id="option@{{$index + 1}}" autocomplete="off" checked> @{{l.descripcion}}
                    </label>
                    <!-- <label class="btn btn-outline-info">
                      <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                    </label>
                    <label class="btn btn-outline-info">
                      <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                    </label> -->
                </div>

               
                    
                 
                   <!-- <div class="row" ng-repeat="s in datos.comisiones.selectedLoteria.sorteos">
                    <div class="col-8">
                        <div class="row mt-2">
                          <label class="d-none d-sm-block col-sm-2 col-form-label font-weight-bold mt-2" style="color: black;">@{{s.descripcion}}</label>
                          <div class="col-sm-5">
                            <div class="form-group">
                            <input ng-blur="comisionSorteo(monto, s.pivot.idLoteria, s.id)" ng-model="monto" type="text"  name="lastname" id="horaCierre" type="text" class="form-control timepicker" >
                            </div>
                          </div>
                        </div>
                      </div>
                   </div> END ROW -->

                   <div class="row" >
                      <div class="col-lg-4" ng-if="existeSorteo('Directo', false)">
                        <div class="row">
                            <div class="col-12 text-center">
                            <h3 class="font-weight-bold m-0">Directo</h3>
                            </div>
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">Primera</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.primera" type="text"  name="primera" id="primera" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">Segunda</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.segunda" type="text"  name="segunda" id="segunda" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">Tercera</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.tercera" type="text"  name="tercera" id="tercera" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                        </div> <!-- END ROW COL-LG-4 -->
                      </div> <!-- END COL-LG-4 -->

                      <div class="col-lg-4" ng-if="existeSorteo('Pale', false)">
                        <div class="row">
                            <div class="col-12 text-center">
                            <h3 class="font-weight-bold m-0">Pale</h3>
                            </div>
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">1era y 2da</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.primeraSegunda" type="text"  name="primeraSegunda" id="primeraSegunda" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">1era y 3era</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.primeraTercera" type="text"  name="primeraTercera" id="primeraTercera" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">2da y 3era</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.segundaTercera" type="text"  name="segundaTercera" id="segundaTercera" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                        </div> <!-- END ROW COL-LG-4 -->
                      </div> <!-- END COL-LG-4 -->

                      <div class="col-lg-4" ng-if="existeSorteo('Tripleta', false)">
                        <div class="row">
                            <div class="col-12 text-center">
                            <h3 class="font-weight-bold m-0">Tripleta</h3>
                            </div>
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">3 numeros</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.tresNumeros" type="text"  name="tresNumeros" id="tresNumeros" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                            <div class="col-12">
                              <div class="row ">
                                <label class="d-none d-sm-block text-right col-sm-4 col-form-label  mt-2" style="color: black;">2 numeros</label>
                                <div class="col-sm-5">
                                  <div class="form-group">
                                  <input ng-model="datos.ckbLoterias[datos.indexLoteriaPagosCombinaciones].pagosCombinaciones.dosNumeros" type="text"  name="dosNumeros" id="dosNumeros" type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                            </div> <!-- END COL-12 -->
                            
                        </div> <!-- END ROW COL-LG-4 -->
                      </div> <!-- END COL-LG-4 -->

                   </div> <!-- END ROW -->

                   

                  </div> <!-- END COL 12 PRINCIPAL -->
                 
                </div>
              </div> <!-- END TAB -->
              


              <div class="tab-pane" id="loterias">
                <div class="row justify-content-center">
                  <div class="col-12">
                    
                  <div class="row justify-content-center">

                    <div class="col-12 text-center">
                      <h2>Jugadas</h2>
                    </div>

                    <div class="col-sm-12 checkbox-radios">

                      
                      <div ng-repeat="d in datos.ckbLoterias" class="form-check form-check-inline">
                        <label class="form-check-label">
                          <input ng-model="d.existe" ng-change="ckbLoterias_changed(ckbDias, d)" class="form-check-input" type="checkbox" value=""> @{{d.descripcion}}
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>



                    </div>
                  </div>

                  </div> <!-- END COL 12 PRINCIPAL -->
                 
                </div>
              </div> <!-- END TAB -->


            </div>
          </div>
          <div class="card-footer">
            <div ng-show="!mostrarBloqueosJugadas" class="row justify-content-end w-100">
              <input ng-click="actualizar()" type="button" class="btn btn-info " name="guardar" value="Guardar">
            </div>
            <!-- <div class="mr-auto">
              <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
            </div>
            <div class="ml-auto">
              <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
              <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
            </div>
            <div class="clearfix"></div> -->
          </div>
        </form>
      </div>
    </div>
    <!-- wizard container -->










<!-- TODAS LAS LOTERIAS -->
<div ng-show="datos.mostrarFormEditar == false" class="row justify-content-center">
  <div class="col-md-10">
      <div class="card ">
        <div class="card-header card-header-info card-header-text">
          <div class="card-text">
            <h4 class="card-title">Todas</h4>
          </div>
        </div>
        <div class="card-body ">
          <div class="row justify-content-end">
            <!-- .abrir-wizard la uso en el archivo demo.js para obtener los datos reales del wizard al momento de quitarle el display none -->
            <a ng-click="editar(true, {})" id="abrir-wizard-nuevo" class="btn btn-success text-white">Nueva loteria</a>
          </div>
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Banca</th>
                <th scope="col">Codigo</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>
              <tr ng-repeat="l in datos.bancas">
                <th scope="row">@{{$index + 1}}</th>
                <td>@{{l.descripcion}}</td>
                <td>@{{l.codigo}}</td>
                <td>
                  <a style="cursor: pointer" ng-click="editar(false, l)" class="ion-edit d-inline bg-primary py-1 text-white rounded abrir-wizard-editar"><i class="material-icons">edit</i></a>
                  <a style="cursor: pointer" ng-click="eliminar(l)" class="ion-android-delete d-inline  ml-2 bg-danger py-1 text-white rounded"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>






  </div>
</div>

                  </div>

               
             </div>
          
        </div>


        
        






<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}" ></script>


<!-- Plugin for the momentJs  -->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>

<!--  Plugin for Sweet Alert -->
<script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>

<!-- Forms Validations Plugin -->
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/js/plugins/nouislider.min.js')}}" ></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="{{asset('assets/js/plugins/arrive.min.js')}}"></script>


<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Chartist JS -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>





<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="{{asset('assets/js/material-dashboard.js')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/demo/demo.js')}}"></script>
































  <script>
  $(document).ready(function(){
    // Initialise the wizard
    demo.initMaterialWizard();
    setTimeout(function() {
      $('.card.card-wizard').addClass('active');
    }, 600);


     // initialise Datetimepicker and Sliders
     md.initFormExtendedDatetimepickers();
    if($('.slider').length != 0){
      md.initSliders();
    }
  });
</script>





    </body>

</html>




@endsection