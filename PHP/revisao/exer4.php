<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 4</h1>
<form action="exer4.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa" class="form-label">Informe o nome da tarefa: </label>
            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control"/>
        </div>
        <div class="col">
            <label for="horas_tarefa" class="form-label">Informe o total de horas da tarefa: </label>
            <input type="number" name="horas_tarefa" id="horas_tarefa" class="form-control"/>
        </div>
        <div class="col">
            <label for="complexidade" class="form-label">Selecione a complexidade: </label>
            <select name="complexidade" id="complexidade" class="form-control">
                <option value="facil">Baixa</option>
                <option value="medio">Média</option>
                <option value="dificil">Alta</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="nome_funcionario" class="form-label">Informe o nome do funcionário: </label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
        </div>
        <div class="col">
            <label for="horas_disponiveis" class="form-label">Informe o total de horas disponíveis: </label>
            <input type="number" name="horas_disponiveis" id="horas_disponiveis" class="form-control"/>
        </div>
        <div class="col">
            <label for="experiencia" class="form-label">Selecione a experiência: </label>
            <select name="experiencia" id="experiencia" class="form-control">
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger mt-3 mb-5">Calcular</button>
        </div>
    </div>
</form>

<?php

    function RealizacaoTarefa($nome_tarefa, $horas_tarefa, $complexidade, $nome_funcionario, $horas_disponiveis, $experiencia) {
        if ($horas_disponiveis < $horas_tarefa * 1.1) {
            return "O total de horas do funcionário " . $nome_funcionario . " é insuficiente para a realização da tarefa " . $nome_tarefa . "!";
        } else if (($experiencia == 'junior' && $complexidade != 'facil') ||  ($experiencia == 'pleno' && $complexidade == 'dificil') || ($experiencia == 'senior' && $complexidade == 'facil')) {
            return "Um funcionário com nível de experiência " . $experiencia . " não pode assumir uma tarefa de complexidade " . $complexidade . "!";
        } else {
            return "Dados da candidatura à realização da tarefa:<br>
                    <br>Nome da tarefa: " . $nome_tarefa . "<br>
                    Horas da tarefa: " . $horas_tarefa . "<br>
                    Complexidade da tarefa: " . $complexidade . "<br>
                    Nome do funcionário candidato: " . $nome_funcionario . "<br>
                    Horas Disponíveis do funcionário: " . $horas_disponiveis . "<br>
                    Experiencia: " . $experiencia;
        }
    }

    if ($_POST){
        $nome_tarefa = $_POST['nome_tarefa'];
        $horas_tarefa = $_POST['horas_tarefa'];
        $complexidade = $_POST['complexidade'];
        $nome_funcionario = $_POST['nome_funcionario'];
        $horas_disponiveis = $_POST['horas_disponiveis'];
        $experiencia = $_POST['experiencia'];
        echo RealizacaoTarefa($nome_tarefa, $horas_tarefa, $complexidade, $nome_funcionario, $horas_disponiveis, $experiencia);
    }

    require_once("rodape.php");