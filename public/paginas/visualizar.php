<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Design Patterns - Fase 03</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="container">
    <h3>Formulário Básico - Dinâmico - Fase 03</h3>
<?php

    $request = new \EJS\Classes\Form\Requisicao\Request();
    $validation = new \EJS\Classes\Form\Validador\Validator($request);
    $elemento = new \EJS\Classes\Elemento();

    $form = new \EJS\Classes\Form\Types\Form($validation, 'form');
    $form->createField($elemento);

    $elementoFieldset = new \EJS\Classes\Elemento();
    $fieldset = new \EJS\Classes\Form\Types\Fieldset('fieldset');
    $fieldset->createField($elementoFieldset);

    $elementoLegenda = new \EJS\Classes\Elemento();
    $legenda = new \EJS\Classes\Form\Types\Label('legend');
    $legenda->setClasse('legenda');
    $legenda->createField($elementoLegenda);
    $legenda->setParam('Formulário para Contato');
    echo $legenda->getParam();
    $legenda->close($elementoLegenda);

    echo "<div class=\"form-group\">";

    $elementoForm  = new \EJS\Classes\Elemento();
    $label = new \EJS\Classes\Form\Types\Label('label');
    $label->setClasse('control-label');
    $label->createField($elementoForm);
    $label->setParam("Nome:");
    echo $label->getParam();
    $label->close($elementoForm);

    echo "<div>";

    $elementoInput = new \EJS\Classes\Elemento();
    $input = new \EJS\Classes\Form\Types\Tag('input');
    $input->setType('text');
    $input->setClasse('form-control');
    $input->setName('nome');
    $input->setPlaceholder('Nome');
    $input->createField($elementoInput);

    echo "</div></div>";

    echo "<div class=\"form-group\">";

    $label->createField($elementoForm);
    $label->setParam("E-mail:");
    echo $label->getParam();
    $label->setClasse('control-label');
    $label->close($elementoForm);

    echo "<div class=\"col-sm-10\">";

    $input->setType('text');
    $input->setClasse('form-control');
    $input->setName('email');
    $input->setPlaceholder('E-mail');
    $input->createField($elementoInput);

    echo "</div></div>";

    echo "<div class=\"form-group\">";

    $label->createField($elementoForm);
    $label->setParam("Mensagem:");
    echo $label->getParam();
    $label->setClasse('control-label');
    $label->close($elementoForm);

    echo "<div>";

    $textarea = new \EJS\Classes\Form\Types\Tag('textarea');
    $textarea->setClasse('form-control');
    $textarea->setType('text');
    $textarea->setName('mesagem');
    $textarea->setPlaceholder('Mensagem');
    $textarea->createField($elementoInput);
    $textarea->close($elemento);

    echo "</div></div>";

    echo "<div class=\"form-group\">";
    echo "<div>";

    $button = new \EJS\Classes\Form\Types\Tag('input');
    $button->setClasse('btn btn-primary');
    $button->setType('submit');
    $button->setName('enviar');
    $button->setPlaceholder('Enviar');
    $button->createField($elementoInput);
    $button->close($elemento);

    echo "</div><div>";

    $form->close($elemento);

        if(isset($_POST)):
            echo '<h3>Dados enviados pelo formulário</h3>';
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
        endif;
?>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
