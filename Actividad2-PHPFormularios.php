<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actividad 2 Formulacrios</title>
</head>

<body>
    <h1 class="display-4">Actividad 2 PHP Formularios</h1>
    <!--Accordion wrapper-->
    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne1">
                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                    <h5 class="mb-0">
                        C U R P <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNombre">Nombres(s)*</label>
                                <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombres(s)*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPrimerApellido">Primer apellido</label>
                                <input type="text" class="form-control" id="inputPrimerApellido" name="inputPrimerApellido" placeholder="Primer apellido(s)*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputSegundoApellido">Segundo apellido</label>
                                <input type="text" class="form-control" id="inputSegundoApellido" name="inputSegundoApellido" placeholder="Segundo apellido" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDiaNacimiento">Dia de nacimiento*</label>
                                <select id="inputDiaNacimiento" name="inputDiaNacimiento" class="form-control" required>
                                    <option selected>Dia de nacimiento</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputMesNacimiento">Mes de nacimiento</label>
                                <select id="inputMesNacimiento" name="inputMesNacimiento" class="form-control" required>
                                    <option selected>Mes de nacimiento</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAnoNacimiento">Año nacimiento</label>
                                <input type="number" size="4" class="form-control" id="inputAnoNacimiento" name="inputAnoNacimiento" placeholder="Año nacimiento" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputSexo">Sexo</label>
                                <select id="inputSexo" name="inputSexo" class="form-control" required>
                                    <option selected>Sexo</option>
                                    <option value="H">Hombre</option>
                                    <option value="M">Mujer</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEstado">Estado</label>
                                <select id="inputEstado" name="inputEstado" class="form-control" required>
                                    <option selected>Estado</option>
                                    <option value="AS">AGUASCALIENTES</option>
                                    <option value="BC">BAJA CALIFORNIA NTE.</option>
                                    <option value="BS">BAJA CALIFORNIA SUR</option>
                                    <option value="CC">CAMPECHE</option>
                                    <option value="CL">COAHUILA </option>
                                    <option value="CM">COLIMA </option>
                                    <option value="CS">CHIAPAS</option>
                                    <option value="CH">CHIHUAHUA</option>
                                    <option value="DF">DISTRITO FEDERAL</option>
                                    <option value="DG">DURANGO</option>
                                    <option value="GT">GUANAJUATO</option>
                                    <option value="GR">GUERRERO</option>
                                    <option value="HG">HIDALGO</option>
                                    <option value="JC">JALISCO</option>
                                    <option value="MC">MEXICO</option>
                                    <option value="MN">MICHOACAN</option>
                                    <option value="MS">MORELOS</option>
                                    <option value="NT">NAYARIT</option>
                                    <option value="NL">NUEVO LEON</option>
                                    <option value="OC">OAXACA</option>
                                    <option value="PL">PUEBLA</option>
                                    <option value="QT">QUERETARO</option>
                                    <option value="QR">QUINTANA ROO</option>
                                    <option value="SP">SAN LUIS POTOSI</option>
                                    <option value="SL">SINALOA</option>
                                    <option value="SR">SONORA</option>
                                    <option value="TC">TABASCO</option>
                                    <option value="TS">TAMAULIPAS</option>
                                    <option value="TL">TLAXCALA</option>
                                    <option value="VZ">VERACRUZ</option>
                                    <option value="YN">YUCATAN</option>
                                    <option value="ZS">ZACATECAS</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Verificar CURP</button>
                    </form>

                    <?php

                    if (
                        isset($_POST["inputNombre"]) || isset($_POST["inputPrimerApellido"]) || isset($_POST["inputSegundoApellido"]) ||
                        isset($_POST["inputSexo"]) ||  isset($_POST["inputDiaNacimiento"]) || isset($_POST["inputMesNacimiento"]) || 
                        isset($_POST["inputAnoNacimiento"])
                    ) {

                        $nombre = $_POST["inputNombre"];
                        $primerAp = $_POST["inputPrimerApellido"];
                        $segundoAp = $_POST["inputSegundoApellido"];
                        $sexo = $_POST["inputSexo"];
                        $estado = $_POST["inputEstado"];
                        $dia = $_POST["inputDiaNacimiento"];
                        $mes = $_POST["inputMesNacimiento"];
                        $a = $_POST["inputAnoNacimiento"];
                        
                        
                        echo "<h4> " . $nombre . " </h4>";
                    }
                    ?>
                </div>
            </div>

        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0">
                        Conversor de decimal a binario, octal y Hexadecimal <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>

        </div>
        <!-- Accordion card -->

        <!-- Accordion card -->
        <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingThree3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                    <h5 class="mb-0">
                        Lector de cadenas <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>

        </div>
        <!-- Accordion card -->
    </div>
    <!-- Accordion wrapper -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>