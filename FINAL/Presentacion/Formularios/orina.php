<?php require "../../Presentacion/Partials/Primera.php" ?>

<div class="pagetitle">
<h1>Examen de Orina</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Formularios</li>
            <li class="breadcrumb-item active">Examen de Orina</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        padding: 20px;
    }

    form {
        margin: 0 auto;
        width: 100%;
        
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    h1,
    h2 {
        color: #343a40;
    }

    label {
        display: block;
        margin-top: 20px;
        color: #6c757d;
    }

    select,
    input {
        width: 100%;
        height: 40px;
        margin-top: 5px;
        padding: 0 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    input[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<form id="urineTestForm">
    
    <!-- Macroscópico -->
    <h3>Macroscópico</h3>

    <label for="aspect">Aspecto:</label>
    <select id="aspecto" name="aspect">
        <option value="limpido">Límpido</option>
        <option value="ligero">Ligeramente turbio</option>
        <option value="turbio">Turbio</option>
    </select>

    <label for="color">Color:</label>
    <select id="color" name="color">
        <option value="amarillo">Amarillo</option>
        <option value="rojizo">Rojizo</option>
        <option value="ambar">Ámbar</option>
        <option value="cafe">Café</option>
    </select>

    <label for="density">Densidad:</label>
    <select id="densidad" name="density">
        <option value="1.000">1.000</option>
        <option value="1.005">1.005</option>
        <option value="1.010">1.010</option>
        <option value="1.015">1.015</option>
        <option value="1.020">1.020</option>
        <option value="1.025">1.025</option>
        <option value="1.030">1.030</option>
    </select>

    <label for="ph">Ph:</label>
    <select id="ph" name="ph">
        <option value="5.0">5.0</option>
        <option value="6.0">6.0</option>
        <option value="6.5">6.5</option>
        <option value="7.0">7.0</option>
        <option value="7.5">7.5</option>
        <option value="8.0">8.0</option>
        <option value="9.0">9.0</option>
    </select>

    <label for="sediment">Sedimento:</label>
    <select id="sediment" name="sediment">
        <option value="negativo">Negativo</option>
        <option value="escasos">Escaso</option>
        <option value="regular">Regular cantidad</option>
        <option value="abundante">Abundante</option>
    </select>

    <!-- Rest of the form fields go here -->

    <!-- Microscópico -->
    <h3>Microscópico:</h3>

    <label for="bacterias">Bacterias:</label>
    <select id="bacterias" name="bacterias">
        <option value="Negativas">Negativas</option>
        <option value="Escasas">Escasas</option>
        <option value="Regular cantidad">Regular cantidad</option>
        <option value="Abundantes">Abundantes</option>
    </select>

    <label for="epitelio">Epitelio:</label>
    <select id="epitelio" name="epitelio">
        <option value="Negativo">Negativo</option>
        <option value="Escaso">Escaso</option>
        <option value="Regular cantidad">Regular cantidad</option>
        <option value="Abundante">Abundante</option>
    </select>

    <label for="eritrocitos">Eritrocitos/campo:</label>
    <select id="eritrocitos" name="eritrocitos">
        <option value="Negativos">Negativos</option>
        <!-- corregir -->
        <option value="1xc">1xc</option>
        <option value="2xc">2xc</option>
        <option value="3xc">3xc</option>
        <option value="4xc">4xc</option>
        <option value="5xc">5xc</option>
        <option value="6xc">6xc</option>
        <option value="7xc">7xc</option>
        <option value="8xc">8xc</option>
        <option value="9xc">9xc</option>
        <option value="10xc">10xc</option>
        <option value="11xc">11xc</option>
        <option value="12xc">12xc</option>
        <option value="13xc">13xc</option>
        <option value="14xc">14xc</option>
        <option value="15xc">15xc</option>
        <option value="16xc">16xc</option>
        <option value="17xc">17xc</option>
        <option value="18xc">18xc</option>
        <option value="19xc">19xc</option>
        <option value="20xc">20xc</option>
        <option value="21xc">21xc</option>
        <option value="22xc">22xc</option>
        <option value="23xc">23xc</option>
        <option value="24xc">24xc</option>
        <option value="Campos llenos">Campos llenos</option>
    </select>


    <!-- corregir -->
    <label for="leucocitos">Leucocitos:</label>
    <select id="leucocitos" name="leucocitos">
        <option value="Negativos">Negativos</option>
        <option value="1xc">1xc</option>
        <option value="2xc">2xc</option>
        <option value="3xc">3xc</option>
        <option value="4xc">4xc</option>
        <option value="5xc">5xc</option>
        <option value="6xc">6xc</option>
        <option value="7xc">7xc</option>
        <option value="8xc">8xc</option>
        <option value="9xc">9xc</option>
        <option value="10xc">10xc</option>
        <option value="11xc">11xc</option>
        <option value="12xc">12xc</option>
        <option value="13xc">13xc</option>
        <option value="14xc">14xc</option>
        <option value="15xc">15xc</option>
        <option value="16xc">16xc</option>
        <option value="17xc">17xc</option>
        <option value="18xc">18xc</option>
        <option value="19xc">19xc</option>
        <option value="20xc">20xc</option>
        <option value="21xc">21xc</option>
        <option value="22xc">22xc</option>
        <option value="23xc">23xc</option>
        <option value="24xc">24xc</option>
        <option value="Campos llenos">Campos llenos</option>
    </select>

    <label for="moco">Moco:</label>
    <select id="moco" name="moco">
        <option value="Negativo">Negativo</option>
        <option value="Escaso">Escaso</option>
        <option value="Regular cantidad">Regular cantidad</option>
        <option value="Abundante">Abundante</option>
    </select>

    <label for="cilindros">Cilindros:</label>
    <select id="cilindros" name="cilindros">
        <option value="Negativos">Negativos</option>
        <option value="Granuloso fino - Escaso">Granuloso fino - Escaso</option>
        <option value="Granuloso fino - Regular cantidad">Granuloso fino - Regular cantidad</option>
        <option value="Granuloso fino - Abundante">Granuloso fino - Abundante</option>
        <option value="Granuloso grueso - Escaso">Granuloso grueso - Escaso</option>
        <option value="Granuloso grueso - Regular cantidad">Granuloso grueso - Regular cantidad</option>
        <option value="Granuloso grueso - Abundante">Granuloso grueso - Abundante</option>
        <option value="Cilindro leucocitario - Escaso">Cilindro leucocitario - Escaso</option>
        <option value="Cilindro leucocitario - Regular cantidad">Cilindro leucocitario - Regular cantidad</option>
        <option value="Cilindro leucocitario - Abundante">Cilindro leucocitario - Abundante</option>
        <option value="Cilindro eritrocitario - Escaso">Cilindro eritrocitario - Escaso</option>
        <option value="Cilindro eritrocitario - Regular cantidad">Cilindro eritrocitario - Regular cantidad</option>
        <option value="Cilindro eritrocitario - Abundante">Cilindro eritrocitario - Abundante</option>
    </select>


    <!-- Add more options for other crystals -->
    </select>

    <label for="levaduras">Levaduras:</label>
    <select id="levaduras" name="levaduras">
        <option value="Escasas">Escasas</option>
        <option value="Regular cantidad">Regular cantidad</option>
        <option value="Abundantes">Abundantes</option>
    </select>

    <label for="leucocitosEnGrumo">Leucocitos en grumo:</label>
    <select id="leucocitosEnGrumo" name="leucocitosEnGrumo">
        <option value="Escasos">Escasos</option>
        <option value="Regular cantidad">Regular cantidad</option>
        <option value="Abundantes">Abundantes</option>
    </select>


    <label for="cristales">Cristales:</label>
    <select id="cristales" name="cristales">
        <option value="Oxalatos de calcio">Oxalatos de calcio</option>
        <option value="Ácido Úrico">Ácido Úrico</option>
        <option value="Fosfato triple">Fosfato triple</option>
        <option value="Uratos amorfos">Uratos amorfos</option>
        <option value="Fosfatos amorfos">Fosfatos amorfos</option>
        <option value="Tirosina">Tirosina</option>
        <option value="Cistina">Cistina</option>
    </select>

    <label for="cantidadCristales">Cantidad de cristales:</label>
    <select id="cantidadCristales" name="cantidadCristales">
        <option value="Escasos">Escasos</option>
        <option value="Regular cantidad">Regular cantidad</option>
        <option value="Abundantes">Abundantes</option>
    </select>


    <!-- Rest of the form fields go here -->

    <!-- Bioquímico -->
    <h3>Bioquímico:</h3>

    <label for="bilirrubina">Bilirrubina:</label>
    <select id="bilirrubina" name="bilirrubina">
        <option value="Negativa">Negativa</option>
        <option value="1 mg/dL">1 mg/dL</option>
        <option value="2 mg/dL">2 mg/dL</option>
        <option value="4 mg/dL">4 mg/dL</option>
    </select>

    <label for="cuerposCetonicos">Cuerpos Cetónicos:</label>
    <select id="cuerposCetonicos" name="cuerposCetonicos">
        <option value="Negativos">Negativos</option>
        <option value="Positivos">Positivos</option>
    </select>

    <label for="glucosa">Glucosa:</label>
    <select id="glucosa" name="glucosa">
        <option value="Negativa">Negativa</option>
        <option value="100 mg/dL">100 mg/dL</option>
        <option value="250 mg/dL">250 mg/dL</option>
        <option value="500 mg/dL">500 mg/dL</option>
        <option value="1000 mg/dL">1000 mg/dL</option>
        <option value="2000 mg/dL">2000 mg/dL</option>
    </select>

    <label for="sangreHemolizada">Sangre hemolizada:</label>
    <select id="sangreHemolizada" name="sangreHemolizada">
        <option value="Negativa">Negativa</option>
        <option value="Positiva">Positiva</option>
    </select>

    <label for="sangreNoHemolizada">Sangre No hemolizada:</label>
    <select id="sangreNoHemolizada" name="sangreNoHemolizada">
        <option value="Negativa">Negativa</option>
        <option value="Positiva">Positiva</option>
    </select>

    <label for="nitritos">Nitritos:</label>
    <select id="nitritos" name="nitritos">
        <option value="Negativos">Negativos</option>
        <option value="Positivos">Positivos</option>
    </select>

    <label for="proteinas">Proteínas:</label>
    <select id="proteinas" name="proteinas">
        <option value="Negativas">Negativas</option>
        <option value="15 mg/dL">15 mg/dL</option>
        <option value="30 mg/dL">30 mg/dL</option>
        <option value="100 mg/dL">100 mg/dL</option>
        <option value="300 mg/dL">300 mg/dL</option>
        <option value="2000 mg/dL">2000 mg/dL</option>
    </select>

    <label for="urobilinogeno">Urobilinógeno:</label>
    <select id="urobilinogeno" name="urobilinogeno">
        <option value="Negativo">Negativo</option>
        <option value="Positivo">Positivo</option>
    </select>

    <label for="leucocitosBioquimico">Leucocitos:</label>
    <select id="leucocitosBioquimico" name="leucocitosBioquimico">
        <option value="Negativos">Negativos</option>
        <option value="Positivos">Positivos</option>
    </select>

    <!-- Rest of the form fields go here -->

    <input type="submit" value="Enviar">

    <!-- boton de regresar -->
    <div class="container mt-4 d-flex justify-content-center">
        <a href="../Dashboard.php" class="btn btn-volver">Volver al menú principal</a>
    </div>

    <style>
        .btn-volver,
        .btn-examen {
            display: inline-block;
            padding: 10px 30px;
            background-color: #00befd;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-right: 10px;
            /* Agregar espacio entre botones */
            margin-top: 20px;
            margin-bottom: 35px;
            /* Agregar espacio entre los botones y el contenido siguiente */
        }

        .btn-volver:hover,
        .btn-examen:hover {
            background-color: #0056b3;
        }
    </style>
</form>
<?php require "../../Presentacion/Partials/Segunda.php" ?>