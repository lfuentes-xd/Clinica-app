


<div class="form-floating mb-3">
    <input type="text" id="idpaciente" name="idpaciente" class="form-control" readonly value="{{$HistoriaClin->id_paciente}}"
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->id_paciente}}
    @endif
    required />
    <label for="idpaciente" class="form-label fuente">Id del paciente</label>
</div>
<div class="form-floating mb-3">
    <input type="text" id="nombre" name="nombre" class="form-control" readonly value="{{$HistoriaClin->nombre_paciente}}"
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->nombre_paciente}}
    @endif
    required />
    <label for="idpaciente" class="form-label fuente">Nombre</label>
</div>



<div class="form-floating mb-3">
    <input type="Diagnosticos" id="Diagnosticos" name="Diagnosticos" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->diagnósticos}}
    @endif
    required />
    <label for="Diagnosticos" class="form-label fuente">Diagnósticos</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="tratamientos" name="tratamientos" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->tratamientos}}
    @endif
    required />
    <label for="tratamientos" class="form-label fuente">Tratamientos</label>
</div>

<div class="form-floating mb-3">
    <input type="text" id="medicamentos_recetados" name="medicamentos_recetados" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->medicamentos_recetados}}
    @endif
    required />
    <label for="medicamentos_recetados" class="form-label fuente">Medicamentos recetados</label>
</div>
<div class="form-floating mb-3">
    <input type="text" id="resultados_pruebas" name="resultados_pruebas" class="form-control" placeholder=""
    @if (isset($HistoriaClin))
        value={{$HistoriaClin->resultados_pruebas}}
    @endif
    required />
    <label for="resultados_pruebas" class="form-label fuente"> Resultados de pruebas</label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{url('/Hpaciente')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar </button>
</div>
