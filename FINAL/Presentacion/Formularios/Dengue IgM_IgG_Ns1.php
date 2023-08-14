<?php require "../../Presentacion/Partials/Primera.php" ?>

<div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
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
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
        }

        label {
            display: block;
            margin-top: 20px;
            color: #6c757d;
        }

        select {
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
</head>

<body>
    <form id="dengueForm">
        <h1>Dengue IgM, IgG, Ns1</h1>
        
        <div class="form-group">
            <label for="dengueIgM">Dengue IgM:</label>
            <select id="dengueIgM" name="dengueIgM">
                <option value="positive">Positivo</option>
                <option value="negative">Negativo</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="dengueIgG">Dengue IgG:</label>
            <select id="dengueIgG" name="dengueIgG">
                <option value="positive">Positivo</option>
                <option value="negative">Negativo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ns1">Ns1:</label>
            <select id="ns1" name="ns1">
                <option value="positive">Positivo</option>
                <option value="negative">Negativo</option>
            </select>
        </div>
        
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
