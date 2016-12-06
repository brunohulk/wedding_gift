<?php
require_once "rate.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-md-offset-4 col-sm-offset-4">
            <div class="title">
                <h1>
                    <i class="fa fa-plane" aria-hidden="true"></i><i class="fa fa-gift" aria-hidden="true"></i>
                    Bruno & Andréia
                    <i class="fa fa-plane" aria-hidden="true"></i><i class="fa fa-gift" aria-hidden="true"></i>
                </h1>
            </div>
            <table class="table table-striped table-bordered">
                <tr>
                    <th>
                        Euros
                    </th>
                    <th>
                        Reais
                    </th>
                </tr>
                <tr>
                    <td>20,00 €</td>
                    <td>R$ <?php echo number_format(20 * $euroRate, 2);?></td>
                </tr>
                <tr>
                    <td>50,00 € </td>
                    <td>R$<?php echo number_format(50 * $euroRate, 2)?></td>
                </tr>
                <tr>
                    <td>100,00 € </td>
                    <td>R$ <?php echo number_format(100 * $euroRate, 2);?></td>
                </tr>
                <tr>
                    <td>250,00 € </td>
                    <td>R$ <?php echo number_format(250 * $euroRate, 2);?></td>
                </tr>
                <tr>
                    <td>500,00 €</td>
                    <td>R$ <?php echo number_format(500 * $euroRate, 2);?></td>
                </tr>
            </table>

            <h2> Definir outro valor <i class="fa fa-money" aria-hidden="true"></i></h2>
            <form class="form">
                <input type="hidden" id="euro_tax" value="<?php echo $euroRate;?>">
                <div class="form-group">
                    <label for="exampleInputName2">Reais</label>
                    <input type="number" class="form-control" id="reais" placeholder="00.00">
                </div>
                <div class="form-group">
                    <label for="exampleInputName2">Euros</label>
                    <input type="text" readonly class="form-control" id="euroResult" placeholder="00.00">
                </div>
                <button type="button" id="btnCalc" class="btn btn-default">Calcular</button><br>
                <div class="pull-right well well-sm">
                    1 euro = R$<?php echo number_format($euroRate, 2);?>*
                </div>
            </form>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/2c5e9f06d0.js"></script>
<script>
    $(function() {
        $("#btnCalc").click(function() {
            number = $("#reais").val() / $("#euro_tax").val();
            number = number.toLocaleString('de-DE', { style: 'currency', currency: 'EUR', maximumFractionDigits: 2});
            $("#euroResult").val(number);
        });
    });
</script>
</body>
</html>